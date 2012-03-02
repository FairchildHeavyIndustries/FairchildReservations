<?php
/* ResPassenger Test cases generated on: 2012-02-16 17:06:29 : 1329411989*/
App::uses('ResPassenger', 'Model');

/**
 * ResPassenger Test Case
 *
 */
class ResPassengerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.res_passenger', 'app.reservation', 'app.res_cc_payment', 'app.card_issuer', 'app.res_fare', 'app.res_fee', 'app.res_flight', 'app.res_hotel', 'app.res_tax');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ResPassenger = ClassRegistry::init('ResPassenger');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResPassenger);

		parent::tearDown();
	}

}
