<?php
App::uses('Cocktail', 'Model');

/**
 * Cocktail Test Case
 */
class CocktailTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cocktail',
		'app.country'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cocktail = ClassRegistry::init('Cocktail');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cocktail);

		parent::tearDown();
	}

}
