<?php
App::uses('AppModel', 'Model');
/**
 * Appointment Model
 *
 * @property Country $Country
 * @property Team $Team
 * @property Team2 $Team2
 * @property Team3 $Team3
 * @property Person $Person
 * @property Person2 $Person2
 * @property Person3 $Person3
 * @property Topic $Topic
 * @property Date $Date
 * @property Time $Time
 */
class Appointment extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'appointment';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'first_name';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'first_name' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please enter your first name.',
				'allowEmpty' => false,
				'required' => true
			),
                        'between' => array(
                            'rule' => array('lengthBetween', 3, 255),
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
                            'rule' => array('lengthBetween', 3, 255),
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
                            'rule' => array('minLength',8),
                            'message' => 'Minimum 8 characters required'
                        ),
                        'maxLength' => array(
                            'rule' => array('maxLength',20),
                            'message' => 'Maximum 20 characters allowed'
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
                'designation' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please enter your designation.',
				'allowEmpty' => false,
				'required' => true
			)
		),
                'date_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please select date.',
				'allowEmpty' => false,
				'required' => true
			)
		),
                'time_id' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please select date.',
				'allowEmpty' => false,
				'required' => true
			)
		),
            'alternate_date' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please select alternate date.',
				'allowEmpty' => false,
				'required' => true
			)
		),
            'alternate_time' => array(
			'notBlank' => array(
				'rule' => array('notBlank'),
				'message' => 'Please select alternate time.',
				'allowEmpty' => false,
				'required' => true
			)
		),
	);

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
		),
		'Team' => array(
			'className' => 'Team',
			'foreignKey' => 'team_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Team2' => array(
			'className' => 'Team',
			'foreignKey' => 'team2_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'Team3' => array(
			'className' => 'Team',
			'foreignKey' => 'team3_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
            'Person2' => array(
			'className' => 'Person',
			'foreignKey' => 'person2_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
            'Person3' => array(
			'className' => 'Person',
			'foreignKey' => 'person3_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Topic' => array(
			'className' => 'Topic',
			'foreignKey' => 'topic_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
            'Topic2' => array(
			'className' => 'Topic',
			'foreignKey' => 'topic2_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
            'Topic3' => array(
			'className' => 'Topic',
			'foreignKey' => 'topic3_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Date' => array(
			'className' => 'Date',
			'foreignKey' => 'date_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Time' => array(
			'className' => 'Time',
			'foreignKey' => 'time_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'AlternateDate' => array(
			'className' => 'Date',
			'foreignKey' => 'alternate_date',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
                'AlternateTime' => array(
			'className' => 'Time',
			'foreignKey' => 'alternate_time',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
	);
}
