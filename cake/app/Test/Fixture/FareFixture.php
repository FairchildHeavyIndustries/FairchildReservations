<?php
/* Fare Fixture generated on: 2012-01-28 23:02:17 : 1327791737 */

/**
 * FareFixture
 *
 */
class FareFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'start_airport' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'end_airport' => array('type' => 'string', 'null' => false, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'currency' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'is_active' => array('type' => 'string', 'null' => false, 'default' => '1', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'amount' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '7,5', 'collate' => NULL, 'comment' => ''),
		'cabin_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'cabinId' => array('column' => 'cabin_id', 'unique' => 0)),
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
			'start_airport' => 'L',
			'end_airport' => 'L',
			'currency' => 'L',
			'is_active' => 'Lorem ipsum dolor sit ame',
			'amount' => 1,
			'cabin_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);
}
