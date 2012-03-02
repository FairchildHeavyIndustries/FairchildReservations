<?php
/* Carrier Test cases generated on: 2012-01-28 18:57:02 : 1327777022*/
App::uses('Carrier', 'Model');

/**
 * Carrier Test Case
 *
 */
class CarrierTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.carrier', 'app.flight');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Carrier = ClassRegistry::init('Carrier');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Carrier);

		parent::tearDown();
	}

}
