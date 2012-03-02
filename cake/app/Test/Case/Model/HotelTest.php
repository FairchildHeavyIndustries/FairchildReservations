<?php
/* Hotel Test cases generated on: 2012-01-29 20:24:11 : 1327868651*/
App::uses('Hotel', 'Model');

/**
 * Hotel Test Case
 *
 */
class HotelTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.hotel', 'app.city', 'app.airport', 'app.reservation', 'app.reservation_hotel');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Hotel = ClassRegistry::init('Hotel');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Hotel);

		parent::tearDown();
	}

}
