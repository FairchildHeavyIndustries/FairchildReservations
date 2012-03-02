<?php
/* ResCcPayment Fixture generated on: 2012-02-13 16:16:53 : 1329149813 */

/**
 * ResCcPaymentFixture
 *
 */
class ResCcPaymentFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'reservation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'card_issuer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'cc_number' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 20, 'collate' => NULL, 'comment' => ''),
		'amount' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '7,5', 'collate' => NULL, 'comment' => ''),
		'currency' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'expiration' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'cvv' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 4, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'reservation_id' => 1,
			'card_issuer_id' => 1,
			'cc_number' => 1,
			'amount' => 1,
			'currency' => 'L',
			'expiration' => '2012-02-13',
			'cvv' => 1
		),
	);
}
