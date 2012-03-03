<?php
/* Route Fixture generated on: 2012-03-03 02:49:28 : 1330742968 */

/**
 * RouteFixture
 *
 */
class RouteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'start_airport_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'end_airport_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'description' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'start_airport_id' => array('column' => 'start_airport_id', 'unique' => 0), 'end_airport_id' => array('column' => 'end_airport_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '1',
			'start_airport_id' => '1',
			'end_airport_id' => '3',
			'description' => 'MIA-SDQ'
		),
		array(
			'id' => '2',
			'start_airport_id' => '3',
			'end_airport_id' => '1',
			'description' => 'SDQ-MIA'
		),
	);
}
