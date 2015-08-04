<?php
App::uses('AppController', 'Controller');
/**
 * Appointments Controller
 *
 * @property Appointment $Appointment
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class AppointmentsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','Email');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Appointment->recursive = 0;
		$this->set('appointments', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Appointment->exists($id)) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		$options = array('conditions' => array('Appointment.' . $this->Appointment->primaryKey => $id));
		$this->set('appointment', $this->Appointment->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Appointment->create();
			if ($this->Appointment->save($this->request->data)) {
				$this->Session->setFlash(__('The appointment has been saved.'));
//                                print_r($this->request->data); exit;
                                $this->_sendAckMail($this->request->data);
                                $this->_notifyAdmin($this->request->data);
				return $this->redirect('/make-an-appointment/thanks');
			} else {
				$this->Session->setFlash(__('The appointment could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Appointment->Country->find('list');
		$teams = $this->Appointment->Team->find('list');
		$people = $this->Appointment->Person->find('list');
		$topics = $this->Appointment->Topic->find('list');
		$dates = $this->Appointment->Date->find('list');
		$times = $this->Appointment->Time->find('list');
		$alternateDates = $this->Appointment->AlternateDate->find('list');
		$alternateTimes = $this->Appointment->AlternateTime->find('list');
		$this->set(compact('countries', 'teams', 'people', 'topics', 'dates', 'times', 'alternateDates', 'alternateTimes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Appointment->exists($id)) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Appointment->save($this->request->data)) {
				$this->Session->setFlash(__('The appointment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Appointment.' . $this->Appointment->primaryKey => $id));
			$this->request->data = $this->Appointment->find('first', $options);
		}
		$countries = $this->Appointment->Country->find('list');
		$teams = $this->Appointment->Team->find('list');
		$people = $this->Appointment->Person->find('list');
		$topics = $this->Appointment->Topic->find('list');
		$dates = $this->Appointment->Date->find('list');
		$times = $this->Appointment->Time->find('list');
		$alternateDates = $this->Appointment->AlternateDate->find('list');
		$alternateTimes = $this->Appointment->AlternateTime->find('list');
		$this->set(compact('countries', 'teams', 'people', 'topics', 'dates', 'times', 'alternateDates', 'alternateTimes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Appointment->id = $id;
		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Appointment->delete()) {
			$this->Session->setFlash(__('The appointment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The appointment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Appointment->recursive = 0;
		$this->set('appointments', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Appointment->exists($id)) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		$options = array('conditions' => array('Appointment.' . $this->Appointment->primaryKey => $id));
		$this->set('appointment', $this->Appointment->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Appointment->create();
			if ($this->Appointment->save($this->request->data)) {
				$this->Session->setFlash(__('The appointment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Appointment->Country->find('list');
		$teams = $this->Appointment->Team->find('list');
		$people = $this->Appointment->Person->find('list');
		$topics = $this->Appointment->Topic->find('list');
		$dates = $this->Appointment->Date->find('list');
		$times = $this->Appointment->Time->find('list');
		$alternateDates = $this->Appointment->AlternateDate->find('list');
		$alternateTimes = $this->Appointment->AlternateTime->find('list');
		$this->set(compact('countries', 'teams', 'people', 'topics', 'dates', 'times', 'alternateDates', 'alternateTimes'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Appointment->exists($id)) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Appointment->save($this->request->data)) {
				$this->Session->setFlash(__('The appointment has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Appointment.' . $this->Appointment->primaryKey => $id));
			$this->request->data = $this->Appointment->find('first', $options);
		}
		$countries = $this->Appointment->Country->find('list');
		$teams = $this->Appointment->Team->find('list');
		$people = $this->Appointment->Person->find('list');
		$topics = $this->Appointment->Topic->find('list');
		$dates = $this->Appointment->Date->find('list');
		$times = $this->Appointment->Time->find('list');
		$alternateDates = $this->Appointment->AlternateDate->find('list');
		$alternateTimes = $this->Appointment->AlternateTime->find('list');
		$this->set(compact('countries', 'teams', 'people', 'topics', 'dates', 'times', 'alternateDates', 'alternateTimes'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Appointment->id = $id;
		if (!$this->Appointment->exists()) {
			throw new NotFoundException(__('Invalid appointment'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Appointment->delete()) {
			$this->Session->setFlash(__('The appointment has been deleted.'));
		} else {
			$this->Session->setFlash(__('The appointment could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function success(){
            
        }
        
        function _sendAckMail($post) {
            $this->Email->to = $post['Appointment']['email'];
            $this->Email->subject = 'Acknowledgement from ANZ';
            $this->Email->from = "ANZ <info@irisapacdigital.com>";
            $this->Email->template = 'appontment'; 
            $this->Email->sendAs = 'html'; 
            $this->set('form', $post);
            $this->Email->send();
        }
        
        function _notifyAdmin($post) {
           
            $appointment = $this->Appointment->findById($this->Appointment->getLastInsertID());
            
            $this->Email->to = 'gaurav.mehra@iris-worldwide.com';
            $this->Email->subject = 'A new request for appointment from '. $post['Appointment']['first_name'];
            $this->Email->from = "ANZ <info@irisapacdigital.com>";
            $this->Email->template = 'appontment_admin'; 
            $this->Email->sendAs = 'html'; 
            $this->set('form', $appointment);
            $this->Email->send();
        }
}
