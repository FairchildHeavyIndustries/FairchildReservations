<?php
/* Routes Test cases generated on: 2012-02-10 01:18:17 : 1328836697*/
App::uses('RoutesController', 'Controller');

/**
 * TestRoutesController *
 */
class TestRoutesController extends RoutesController {
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
 * RoutesController Test Case
 *
 */
class RoutesControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.route', 'app.fare', 'app.cabin', 'app.reservation_flight', 'app.aircraft', 'app.flight', 'app.carrier', 'app.reservation', 'app.aircrafts_cabin', 'app.reservation_fare');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Routes = new TestRoutesController();
		$this->Routes->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Routes);

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
