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
	public $components = array('Session');

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
class FlightsControllerTestCase extends ControllerTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.flight', 'app.carrier', 'app.aircraft', 'app.cabin', 'app.res_flight', 'app.reservation', 'app.res_passenger', 'app.route', 'app.fare', 'app.aircrafts_cabin');

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
 * @group unit
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
 * @group unit
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
 * @group unit
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
 * @group unit
 * @test
 * @return void
 */
	public function AvailableFlights() {

		$result = $this->Flights->available_flights('ABC', 'DEF', '01/01/2013');
		
		$this->assertEquals($result[0]['Flight']['id'], 1);
		$this->assertCount(2, $result);
		return $result;
	}


/**
 * testAvailableFlightsByWeekday method
 * @group unit
 * @test
 * @return array $flights
 */
	public function AvailableFlightsByWeekday() {
		$result = $this->Flights->available_flights('ABC', 'DEF', '01/05/2013');
		$this->assertEquals($result[0]['Flight']['id'], 2);
		$this->assertCount(1, $result);
	}

/**
 * AvailableCabinSoldOut method
 * @group acceptance
 * @test
 * @return void
 */
	public function AvailableCabinSoldOut() {
		$result = $this->Flights->available_flights('ABC', 'DEF', '01/02/2013');
		$this->assertCount(2, $result[1]['Aircraft']['Cabin']);
	}

/**
 * AvailableFlightsSoldOut method
 * @test
 * @group acceptance
 * @return void
 */
	public function AvailableFlightsSoldOut() {
		// not implemented
	}
	

/**
 * cabinsFromFlights method
 * @test
 * @group unit
 * @depends AvailableFlights
 * @return void
 */
	public function cabinsFromFlights(array $flights) {
		$cabins = $this->Flights->cabins_from_flights($flights);
		$this->assertEquals("Coach", $cabins[0]["name"]);
		$this->assertCount(6, $cabins);
	}

/**
 * setOutboundFlights method
 * @test
 * @group unit
 * @return void
 */
	public function setOutboundFlights() {
		
		//$this->Flights->FRSSession->STUB_SESSION['Search']['direction'] = "pooface"; 
		//debug($this->Flights->FRSSession->read("Search.direction"));
	}
	
	
}
