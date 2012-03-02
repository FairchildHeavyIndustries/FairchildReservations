<?php
/* ResFlight Test cases generated on: 2012-02-17 16:02:10 : 1329494530*/
App::uses('ResFlight', 'Model');

/**
 * ResFlight Test Case
 *
 */
class ResFlightTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.res_flight', 'app.reservation', 'app.res_cc_payment', 'app.card_issuer', 'app.res_fare', 'app.res_fee', 'app.res_hotel', 'app.res_passenger', 'app.res_tax', 'app.flight', 'app.carrier', 'app.aircraft', 'app.cabin', 'app.fare', 'app.route', 'app.airport', 'app.city', 'app.hotel', 'app.re', 'app.fares_flight', 'app.aircrafts_cabin');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ResFlight = ClassRegistry::init('ResFlight');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResFlight);

		parent::tearDown();
	}

}
