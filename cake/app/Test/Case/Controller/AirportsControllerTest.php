<?php
/* Airports Test cases generated on: 2012-02-10 05:02:40 : 1328850160*/
App::uses('AirportsController', 'Controller');

/**
 * TestAirportsController *
 */
class TestAirportsController extends AirportsController {
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
 * AirportsController Test Case
 *
 */
class AirportsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
	'app.airport', 
	//'app.city', 
);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		 parent::setUp();
		 
		 		$this->Airports = new TestAirportsController();
		 		$this->Airports->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Airports);

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
