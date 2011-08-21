<?php
/* Airports Test cases generated on: 2011-08-21 08:05:39 : 1313913939*/
App::import('Controller', 'Airports');

class TestAirportsController extends AirportsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AirportsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.airport', 'app.city');

	function startTest() {
		$this->Airports =& new TestAirportsController();
		$this->Airports->constructClasses();
	}

	function endTest() {
		unset($this->Airports);
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

}
