<?php
/* ResCcPayment Test cases generated on: 2012-02-13 16:16:53 : 1329149813*/
App::uses('ResCcPayment', 'Model');

/**
 * ResCcPayment Test Case
 *
 */
class ResCcPaymentTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.res_cc_payment', 'app.reservation', 'app.customer', 'app.res_fare', 'app.res_fee', 'app.res_flight', 'app.res_hotel', 'app.res_tax', 'app.card_issuer');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->ResCcPayment = ClassRegistry::init('ResCcPayment');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResCcPayment);

		parent::tearDown();
	}

}
