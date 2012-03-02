<?php
/* CardIssuer Test cases generated on: 2012-02-13 20:45:29 : 1329165929*/
App::uses('CardIssuer', 'Model');

/**
 * CardIssuer Test Case
 *
 */
class CardIssuerTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.card_issuer');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();

		$this->CardIssuer = ClassRegistry::init('CardIssuer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CardIssuer);

		parent::tearDown();
	}

}
