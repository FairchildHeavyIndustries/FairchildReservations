<?php
/* Flight Test cases generated on: 2011-08-21 08:00:49 : 1313913649*/
App::import('Model', 'Flight');

class FlightTestCase extends CakeTestCase {
	var $fixtures = array('app.flight', 'app.carrier');

	function startTest() {
		$this->Flight =& ClassRegistry::init('Flight');
	}

	function endTest() {
		unset($this->Flight);
		ClassRegistry::flush();
	}

}
