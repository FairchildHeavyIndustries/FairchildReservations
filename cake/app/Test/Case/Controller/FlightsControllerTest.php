<?php
/* Flights Test cases generated on: 2012-01-28 19:15:06 : 1327778106*/
App::uses('FlightsController', 'Controller');

/**
 * TestFlightsController *
 */
class TestFlightsController extends FlightsController {
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
 * FlightsController Test Case
 *
 */
class FlightsControllerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.flight', 'app.carrier', 'app.aircraft', 'app.cabin', 'app.res_flight', 'app.reservation', 'app.route', 'app.fare');
	public $autoFixtures = false;

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Flights = new TestFlightsController();
		$this->Flights->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Flights);

		parent::tearDown();
	}

/**
 * testArrayToSelectList method
 *
 * @return void
 */
	public function testArrayToSelectList() {
		$inputAirports = array('MIA', 'SDQ', 'JFK');
		$outputArray = $this->Flights->array_to_select_list($inputAirports);
		$expectedArray = array('MIA' => 'MIA', 'SDQ' => 'SDQ', 'JFK' => 'JFK');
		$this->assertEquals($outputArray, $expectedArray);
	}


/**
 * testArrayToSelectList method
 * @test
 * @return void
 */
	public function weekdayFromDate() {
		$inputDate = '07/15/1970';
		$outputWeekday = $this->Flights->weekday_from_date($inputDate);
		$expectedWeekday = 'wednesday';
		$this->assertEquals($outputWeekday, $expectedWeekday);
	}


/**
 * testArrayToSelectList method
 * @test
 * @return void
 */
	public function multiArrayUnique() {
		$inputArray = array(
			array('ball' => 'round', 'stick' => 'tall'), 
			array('fruit' => 'apple', 'stick' => 'tall'), 
			array('ball' => 'round', 'stick' => 'tall')
		);
		$outputArray = $this->Flights->multi_array_unique($inputArray);
		$expectedArray = array(
			array('ball' => 'round', 'stick' => 'tall'), 
			array('fruit' => 'apple', 'stick' => 'tall') 
		);
		$this->assertEquals($outputArray, $expectedArray);
	}


/**
 * testAvailableFlights method
 * @test
 * @return void
 */
	public function AvailableFlights() {
		$this->loadFixtures('Flight', 'Carrier', 'Aircraft', 'Cabin', 'ResFlight', 'Reservation', 'Route', 'Fare');
		$result = $this->Flights->available_flights('ABC', 'DEF', '01/01/2013');
		
		$this->assertEquals($result[0]['Flight']['id'], 1);
		$this->assertCount(2, $result);
		return $result;
	}


/**
 * testAvailableFlightsByWeekday method
 * @test
 * @return array $flights
 */
	public function AvailableFlightsByWeekday() {
		$this->loadFixtures('Flight', 'Carrier', 'Aircraft', 'Cabin');
		$result = $this->Flights->available_flights('ABC', 'DEF', '01/05/2013');
		$this->assertEquals($result[0]['Flight']['id'], 2);
		$this->assertCount(1, $result);
	}
/**
 * AvailableFlightsSoldOut method
 * @test
 * @return void
 */
	public function AvailableFlightsSoldOut() {
		$this->loadFixtures('Flight', 'Carrier', 'Aircraft', 'Cabin', 'Reservation', 'ResFlight');
		$result = $this->Flights->available_flights('ABC', 'DEF', '01/01/2013');
		$this->assertEquals($result[0]['Flight']['id'], 1);
	}
	

/**
 * cabinsFromFlights method
 * @test
 * @depends AvailableFlights
 * @return void
 */
	public function cabinsFromFlights(array $flights) {
		$cabins = $this->Flights->cabins_from_flights($flights);
		$this->assertEquals("Coach", $cabins[0]["name"]);
		$this->assertCount(5, $cabins);
	}
}
