<?php
/* Reservation Test cases generated on: 2012-02-13 21:35:57 : 1329168957*/
App::uses('Reservation', 'Model');

/**
 * Reservation Test Case
 *
 */
class ReservationTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.reservation', 'app.res_cc_payment', 'app.card_issuer', 'app.res_fare', 'app.res_fee', 'app.res_flight', 'app.res_hotel', 'app.res_passenger', 'app.res_tax');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Reservation = ClassRegistry::init('Reservation');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reservation);

		parent::tearDown();
	}

}
