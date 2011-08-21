<?php
/* Airport Test cases generated on: 2011-08-21 08:05:32 : 1313913932*/
App::import('Model', 'Airport');

class AirportTestCase extends CakeTestCase {
	var $fixtures = array('app.airport', 'app.city');

	function startTest() {
		$this->Airport =& ClassRegistry::init('Airport');
	}

	function endTest() {
		unset($this->Airport);
		ClassRegistry::flush();
	}

}
