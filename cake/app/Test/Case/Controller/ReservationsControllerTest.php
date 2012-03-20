<?php
/* Reservations Test cases generated on: 2012-02-11 18:28:26 : 1328984906*/
App::uses('ReservationsController', 'Controller');

/**
 * TestReservationsController *
 */
class TestReservationsController extends ReservationsController {
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
 * ReservationsController Test Case
 *
 */
class ReservationsControllerTestCase extends ControllerTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.reservation', 'app.res_passenger', 'app.res_fare', 'app.res_fee', 'app.res_flight', 'app.res_hotel', 'app.res_tax');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->Reservations = new TestReservationsController();
		$this->Reservations->constructClasses();
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Reservations);

		parent::tearDown();
	}

/**
 * viewReservation method
 * 
 * @test
 * @group unit
 * @return void
 */
	public function viewReservation()
	{	
		$result = $this->testAction('reservations/view/99', array('return' => 'vars'));
		$this->assertEquals($result['reservation']['Reservation']['pnr'], 'BCDFJK');
		
	}


/**
 * testGeneratePNR method
 * 
 * @test
 * @group unit
 * @return void
 */
	public function testGeneratePNR()
	{	
		$newPNR = $this->Reservations->generatePNR();
		$this->assertEquals($newPNR, 'BCDFJL');
		$this->assertRegExp("/[BCDFJHJKLMNPQRSTVWXYZ]{6}/", $newPNR);
	}

/**
 * doubleLetterUpdate method
 * 
 * @test
 * @group unit
 * @return void
 */
	public function doubleLetterUpdate()
	{	
		$mockResController = $this->generate('Reservations', array(
			'models' => array(
				'Reservation' => array('find')
			)
		));
		$mockReply = array(array('pnr' => 'BBBBZZ'));
		
		$mockResController->Reservation
		    ->expects($this->once())
		    ->method('find')
		    ->will($this->returnValue($mockReply));
		
		$newPNR = $this->Reservations->generatePNR();
		$this->assertEquals($newPNR, 'BBBCBB');
	}

/**
 * generatePNRRollover method
 * 
 * @test
 * @group unit
 * @return void
 */
	public function generatePNRRollover()
	{	
		$mockResController = $this->generate('Reservations', array(
			'models' => array(
				'Reservation' => array('find')
			)
		));
		$mockReply = array(array('pnr' => 'ZZZZZZ'));

		$mockResController->Reservation
		    ->expects($this->once())
		    ->method('find')
		    ->will($this->returnValue($mockReply));

		$newPNR = $this->Reservations->generatePNR();
		$this->assertEquals($newPNR, 'BBBBBB');
	}


}
