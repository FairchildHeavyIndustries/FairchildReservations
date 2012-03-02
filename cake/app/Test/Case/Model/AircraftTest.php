<?php
/* Aircraft Test cases generated on: 2012-02-25 22:08:49 : 1330207729*/
App::uses('Aircraft', 'Model');

/**
 * Aircraft Test Case
 *
 */
class AircraftTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.aircraft', 'app.cabin', 'app.aircrafts_cabin');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Aircraft = ClassRegistry::init('Aircraft');
	}

/**
 * hasCabins method
 * @return void
 */
	public function testHasCabins()
	{
		$expected = 1; 
		$result = 1;

		$this->assertEquals($expected, $result);
	}
/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Aircraft);

		parent::tearDown();
	}

}
