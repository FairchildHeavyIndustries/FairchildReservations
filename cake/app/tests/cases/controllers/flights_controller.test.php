<?php
/* Flights Test cases generated on: 2011-08-21 08:02:48 : 1313913768*/
App::import('Controller', 'Flights');

class TestFlightsController extends FlightsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FlightsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.flight', 'app.carrier');

	function startTest() {
		$this->Flights =& new TestFlightsController();
		$this->Flights->constructClasses();
	}

	function endTest() {
		unset($this->Flights);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
