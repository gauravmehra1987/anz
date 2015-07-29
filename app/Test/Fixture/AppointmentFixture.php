<?php
/**
 * Appointment Fixture
 */
class AppointmentFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'appointment';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'initials' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'phone' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'city' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 5, 'unsigned' => false),
		'bank_name' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'guest_1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'guest_2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'guest_3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'topic_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'other_topic' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'date_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'time_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'alternate_date' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'alternate_time' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'updated' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'initials' => 'Lore',
			'email' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dolor ',
			'city' => 'Lorem ipsum dolor sit amet',
			'country_id' => 1,
			'bank_name' => 'Lorem ipsum dolor sit amet',
			'guest_1' => 'Lorem ipsum dolor sit amet',
			'guest_2' => 'Lorem ipsum dolor sit amet',
			'guest_3' => 'Lorem ipsum dolor sit amet',
			'team_id' => 1,
			'person_id' => 1,
			'topic_id' => 1,
			'other_topic' => 'Lorem ipsum dolor sit amet',
			'date_id' => 1,
			'time_id' => 1,
			'alternate_date' => 1,
			'alternate_time' => 1,
			'created' => '2015-07-29 08:11:22',
			'updated' => '2015-07-29 08:11:22'
		),
	);

}
