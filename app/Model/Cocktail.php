<?php
App::uses('AppModel', 'Model');
/**
 * Cocktail Model
 *
 * @property Country $Country
 */
class Cocktail extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'first_name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Country' => array(
			'className' => 'Country',
			'foreignKey' => 'country_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        public $validate = array(
		'first_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please enter your first name.',
				'allowEmpty' => false,
				'required' => true
			),
                        'between' => array(
                            'rule' => array('lengthBetween', 3, 20),
                            'message' => 'Between 3 to 20 characters only'
                        )
		),
                'last_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please enter your last name.',
				'allowEmpty' => false,
				'required' => true
			),
                        'between' => array(
                            'rule' => array('lengthBetween', 3, 20),
                            'message' => 'Between 3 to 20 characters only'
                        )
		),
                'email' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please enter your email address.',
				'allowEmpty' => false,
				'required' => true
			),
                        'email' => 'email'
		),
                'phone' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please enter your phone number.',
				'allowEmpty' => false,
				'required' => true
			),
                        'minLength' => array(
                            'rule' => array('minLength',10),
                            'message' => 'Minimum 10 characters required'
                        ),
                        'maxLength' => array(
                            'rule' => array('maxLength',12),
                            'message' => 'Maximim 20 characters allowed'
                        )
		),
                'city' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please enter your city.',
				'allowEmpty' => false,
				'required' => true
			)
		),
                'bank_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please enter your bank name.',
				'allowEmpty' => false,
				'required' => true
			)
		),
	);
}
