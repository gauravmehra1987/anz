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
		'designation' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'guest_1' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'guest_2' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'guest_3' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'designation_1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'designation_2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'designation_3' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'team_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'team2_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'team3_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'person2_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'person3_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'more_delegates' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
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
			'designation' => 'Lorem ipsum dolor sit amet',
			'guest_1' => 'Lorem ipsum dolor sit amet',
			'guest_2' => 'Lorem ipsum dolor sit amet',
			'guest_3' => 'Lorem ipsum dolor sit amet',
			'designation_1' => 'Lorem ipsum dolor sit amet',
			'designation_2' => 'Lorem ipsum dolor sit amet',
			'designation_3' => 'Lorem ipsum dolor sit amet',
			'team_id' => 1,
			'team2_id' => 1,
			'team3_id' => 1,
			'person_id' => 1,
			'person2_id' => 1,
			'person3_id' => 1,
			'more_delegates' => 'Lorem ipsum dolor sit amet',
			'topic_id' => 1,
			'other_topic' => 'Lorem ipsum dolor sit amet',
			'date_id' => 1,
			'time_id' => 1,
			'alternate_date' => 1,
			'alternate_time' => 1,
			'created' => '2015-08-13 10:18:52',
			'updated' => '2015-08-13 10:18:52'
		),
	);

}
