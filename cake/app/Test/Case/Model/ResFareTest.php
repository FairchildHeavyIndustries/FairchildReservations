<?php
/* ResFare Test cases generated on: 2012-09-14 05:04:23 : 1347599063*/
App::uses('ResFare', 'Model');

/**
 * ResFare Test Case
 *
 */
class ResFareTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.res_fare', 'app.reservation', 'app.res_cc_payment', 'app.card_issuer', 'app.res_fee', 'app.res_flight', 'app.flight', 'app.carrier', 'app.aircraft', 'app.cabin', 'app.aircrafts_cabin', 'app.route', 'app.airport', 'app.city', 'app.hotel', 'app.re', 'app.res_hotel', 'app.fare', 'app.fares_flight', 'app.res_passenger', 'app.res_tax');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ResFare = ClassRegistry::init('ResFare');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResFare);

		parent::tearDown();
	}

}
