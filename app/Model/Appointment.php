<?php
App::uses('AppModel', 'Model');
/**
 * Appointment Model
 *
 * @property Country $Country
 * @property Team $Team
 * @property Person $Person
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
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
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
		'Person' => array(
			'className' => 'Person',
			'foreignKey' => 'person_id',
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
