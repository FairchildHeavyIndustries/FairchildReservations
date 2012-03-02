<?php
/* Fares Test cases generated on: 2012-02-10 22:52:36 : 1328914356*/
App::uses('FaresController', 'Controller');

/**
 * TestFaresController *
 */
class TestFaresController extends FaresController {
/**
 * Auto render
 *
 * @var boolean
 */
	public $autoRender = false;

/**
 * Redirect action
 *
 * @param mixed $url
 * @param mixed $status
 * @param boolean $exit
 * @return void
 */
	public function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

/**
 * FaresController Test Case
 *
 */
class FaresControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.fare', 'app.cabin', 'app.reservation_flight', 'app.aircraft', 'app.flight', 'app.carrier', 'app.route', 'app.airport', 'app.city', 'app.hotel', 'app.reservation', 'app.reservation_hotel', 'app.aircrafts_cabin', 'app.fares_flight');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Fares = new TestFaresController();
		$this->Fares->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fares);

		parent::tearDown();
	}

/**
 * testIndex method
 *
 * @return void
 */
	public function testIndex() {

	}

/**
 * testView method
 *
 * @return void
 */
	public function testView() {

	}

/**
 * testAdd method
 *
 * @return void
 */
	public function testAdd() {

	}

/**
 * testEdit method
 *
 * @return void
 */
	public function testEdit() {

	}

/**
 * testDelete method
 *
 * @return void
 */
	public function testDelete() {

	}

}
