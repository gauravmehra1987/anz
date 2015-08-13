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
	public $components = array('Paginator', 'Session');

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
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The appointment could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Appointment->Country->find('list');
		$teams = $this->Appointment->Team->find('list');
		$team2s = $this->Appointment->Team2->find('list');
		$team3s = $this->Appointment->Team3->find('list');
		$people = $this->Appointment->Person->find('list');
		$person2s = $this->Appointment->Person2->find('list');
		$person3s = $this->Appointment->Person3->find('list');
		$topics = $this->Appointment->Topic->find('list');
		$dates = $this->Appointment->Date->find('list');
		$times = $this->Appointment->Time->find('list');
		$this->set(compact('countries', 'teams', 'team2s', 'team3s', 'people', 'person2s', 'person3s', 'topics', 'dates', 'times'));
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
		$team2s = $this->Appointment->Team2->find('list');
		$team3s = $this->Appointment->Team3->find('list');
		$people = $this->Appointment->Person->find('list');
		$person2s = $this->Appointment->Person2->find('list');
		$person3s = $this->Appointment->Person3->find('list');
		$topics = $this->Appointment->Topic->find('list');
		$dates = $this->Appointment->Date->find('list');
		$times = $this->Appointment->Time->find('list');
		$this->set(compact('countries', 'teams', 'team2s', 'team3s', 'people', 'person2s', 'person3s', 'topics', 'dates', 'times'));
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
}
