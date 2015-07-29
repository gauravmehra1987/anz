<?php
App::uses('AppModel', 'Model');
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
    
	public $displayField = 'name';
        
        public $validate = array(
            'username' => array(
                'required' => array(
                    'rule' => 'notBlank',
                    'message' => 'A username is required'
                )
            ),
            'password' => array(
                'required' => array(
                    'rule' => 'notBlank',
                    'message' => 'A password is required'
                )
            )
    );

        function check_user_data($data) {
		// init
		$return = FALSE;

		// find user with passed username
		$conditions = array(
			'User.username'=>$data['User']['username'],
			'User.status'=>'1'
		);
		$user = $this->find('first',array('conditions'=>$conditions));

		// not found
		if(!empty($user)) {
			$salt = Configure::read('Security.salt');
			// check password
			if($user['User']['password'] == md5($data['User']['password'].$salt)) {
				$return = $user;
			}
		}

            return $return;
	}
        
        public function beforeSave($options = array()) {
            if (isset($this->data[$this->alias]['password'])) {
                $this->data[$this->alias]['password'] = AuthComponent::password($this->data['User']['password']);
            }
            return true;
        }
}
