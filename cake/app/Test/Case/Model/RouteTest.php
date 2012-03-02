<?php
/* Route Test cases generated on: 2012-02-10 01:09:19 : 1328836159*/
App::uses('Route', 'Model');

/**
 * Route Test Case
 *
 */
class RouteTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.route', 'app.start_airport', 'app.end_airport', 'app.fare', 'app.cabin', 'app.reservation_flight', 'app.aircraft', 'app.flight', 'app.carrier', 'app.reservation', 'app.aircrafts_cabin', 'app.reservation_fare');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Route = ClassRegistry::init('Route');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Route);

		parent::tearDown();
	}

}
