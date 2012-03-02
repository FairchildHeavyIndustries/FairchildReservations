<?php
/* City Test cases generated on: 2012-01-28 23:22:46 : 1327792966*/
App::uses('City', 'Model');

/**
 * City Test Case
 *
 */
class CityTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.city', 'app.airport', 'app.hotel');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->City = ClassRegistry::init('City');
	}


/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->City);

		parent::tearDown();
	}

}
