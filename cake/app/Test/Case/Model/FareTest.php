<?php
/* Fare Test cases generated on: 2012-01-28 23:02:17 : 1327791737*/
App::uses('Fare', 'Model');

/**
 * Fare Test Case
 *
 */
class FareTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.fare', 'app.cabin', 'app.reservation_flight', 'app.aircraft', 'app.flight', 'app.carrier', 'app.reservation', 'app.aircrafts_cabin', 'app.reservation_fare');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Fare = ClassRegistry::init('Fare');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fare);

		parent::tearDown();
	}

}
