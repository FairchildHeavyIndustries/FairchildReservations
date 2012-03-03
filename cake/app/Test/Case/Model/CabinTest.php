<?php
/* Cabin Test cases generated on: 2012-01-28 22:11:17 : 1327788677*/
App::uses('Cabin', 'Model');

/**
 * Cabin Test Case
 *
 */
class CabinTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.cabin','app.aircraft', 'app.aircrafts_cabin');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Cabin = ClassRegistry::init('Cabin');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cabin);

		parent::tearDown();
	}

/**
 * testCabinValidation method
 * @return void
 */
	public function testCabinValidation()
	{
		$Cabins = $this->Cabin->find('all');
		foreach ($Cabins as $Cabin) {
			$this->assertStringMatchesFormat('%d', $Cabin['Cabin']['no_of_seat']);
		}
		//$this->assertEquals($result[0]['Cabin']['no_of_seat'], 80);
	}
}
