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
                    'conditions'=>array('team_id'=>$this->request->data['team']),'order'=>array('id desc')));
                $people = array();
                foreach($result as $key=>$item){
                   $people[] = array('id'=>$key,'title'=>$item);
                }
                die(json_encode($people));
            }
        }

}
