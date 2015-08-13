<?php
App::uses('AppointmentsController', 'Controller');

/**
 * AppointmentsController Test Case
 */
class AppointmentsControllerTest extends ControllerTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.appointment',
		'app.country',
		'app.team',
		'app.team2',
		'app.team3',
		'app.person',
		'app.person2',
		'app.person3',
		'app.topic',
		'app.date',
		'app.time'
	);

}
