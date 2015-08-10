<?php
App::uses('AppController', 'Controller');
/**
 * People Controller
 *
 */
class PeopleController extends AppController {

/**
 * Scaffold
 *
 * @var mixed
 */
	public $scaffold;
        
        public function index(){
            if($this->request->is('ajax')){
                $result = $this->Person->find('list',array(
                    'conditions'=>array('team_id'=>$this->request->data['team']),'order'=>array('sort_order')));
                die(json_encode($result));
            }
        }

}
