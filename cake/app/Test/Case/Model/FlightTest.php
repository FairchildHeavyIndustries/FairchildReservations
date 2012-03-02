<?php
/* Flight Test cases generated on: 2012-01-28 19:08:54 : 1327777734*/
App::uses('Flight', 'Model');

/**
 * Flight Test Case
 *
 */
class FlightTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.flight', 'app.carrier', 'app.aircraft');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Flight = ClassRegistry::init('Flight');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Flight);

		parent::tearDown();
	}

}
