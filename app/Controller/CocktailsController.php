<?php
App::uses('AppController', 'Controller');
/**
 * Cocktails Controller
 *
 * @property Cocktail $Cocktail
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CocktailsController extends AppController {

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
		$this->Cocktail->recursive = 0;
		$this->set('cocktails', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Cocktail->exists($id)) {
			throw new NotFoundException(__('Invalid cocktail'));
		}
		$options = array('conditions' => array('Cocktail.' . $this->Cocktail->primaryKey => $id));
		$this->set('cocktail', $this->Cocktail->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
            $this->set('title','Cocktail Reception');
		if ($this->request->is('post')) {
			$this->Cocktail->create();
			if ($this->Cocktail->save($this->request->data)) {
                            $this->_sendAckMail($this->request->data);
                            $this->_notifyAdmin($this->request->data);
                            $this->Session->write('Cocktail.acceptance', $this->request->data['Cocktail']);
                            $this->Session->setFlash(__('The cocktail has been saved.'));
                            return $this->redirect('/cocktail-reception/thanks');
			} else {
				$this->Session->setFlash(__('The cocktail could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Cocktail->Country->find('list');
                $countries[''] = "Select Country"; ksort($countries);
		$this->set(compact('countries'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Cocktail->exists($id)) {
			throw new NotFoundException(__('Invalid cocktail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cocktail->save($this->request->data)) {
				$this->Session->setFlash(__('The cocktail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cocktail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cocktail.' . $this->Cocktail->primaryKey => $id));
			$this->request->data = $this->Cocktail->find('first', $options);
		}
		$countries = $this->Cocktail->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Cocktail->id = $id;
		if (!$this->Cocktail->exists()) {
			throw new NotFoundException(__('Invalid cocktail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cocktail->delete()) {
			$this->Session->setFlash(__('The cocktail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cocktail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Cocktail->recursive = 0;
		$this->set('cocktails', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Cocktail->exists($id)) {
			throw new NotFoundException(__('Invalid cocktail'));
		}
		$options = array('conditions' => array('Cocktail.' . $this->Cocktail->primaryKey => $id));
		$this->set('cocktail', $this->Cocktail->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Cocktail->create();
			if ($this->Cocktail->save($this->request->data)) {
				$this->Session->setFlash(__('The cocktail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cocktail could not be saved. Please, try again.'));
			}
		}
		$countries = $this->Cocktail->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Cocktail->exists($id)) {
			throw new NotFoundException(__('Invalid cocktail'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Cocktail->save($this->request->data)) {
				$this->Session->setFlash(__('The cocktail has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cocktail could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Cocktail.' . $this->Cocktail->primaryKey => $id));
			$this->request->data = $this->Cocktail->find('first', $options);
		}
		$countries = $this->Cocktail->Country->find('list');
		$this->set(compact('countries'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Cocktail->id = $id;
		if (!$this->Cocktail->exists()) {
			throw new NotFoundException(__('Invalid cocktail'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Cocktail->delete()) {
			$this->Session->setFlash(__('The cocktail has been deleted.'));
		} else {
			$this->Session->setFlash(__('The cocktail could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
        
        public function success(){
            $cocktail = $this->Session->read('Cocktail.acceptance');
            if(!is_array($cocktail))
                $this->redirect('/');
            
            $this->set('accepted',$cocktail);
            $this->Session->delete('Cocktail.acceptance');
        }
        
        function _sendAckMail($post){
            $this->Email->to = $post['Cocktail']['email'];
            if($post['Cocktail']['attending_cocktail']){
                $subject = 'ANZ Sibos 2015 - cocktail reception acceptance';
            }else{
                $subject = 'ANZ Sibos 2015 - cocktail reception';
            }
            $this->Email->subject = $subject;
            $this->Email->from = "ANZ<info@irisapacdigital.com>";
            $this->Email->template = 'cocktail'; 
            $this->Email->sendAs = 'html'; 
            $this->set('form', $post);
            $this->Email->send();
        }
        
        function _notifyAdmin($post){     
            $cocktail = $this->Cocktail->findById($this->Cocktail->getLastInsertID());
            $this->Email->to = Configure::read('Config.admin_email');
//            $this->Email->bcc = Configure::read('Config.dev_email');
            $this->Email->subject = 'Cocktail Reception Acceptance/Rejection';
            $this->Email->from = "ANZ Sibos Admin<info@sibos.anz.com>";
            $this->Email->template = 'cocktail_admin'; 
            $this->Email->sendAs = 'html'; 
            $this->set('form', $cocktail);
            $this->Email->send();
        }
}
