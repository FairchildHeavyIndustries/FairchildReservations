<?php
/* AircraftsCabin Fixture generated on: 2012-03-11 15:20:08 : 1331479208 */

/**
 * AircraftsCabinFixture
 *
 */
class AircraftsCabinFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'aircraft_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'cabin_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('aircraftId' => array('column' => 'aircraft_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'aircraft_id' => '2',
			'cabin_id' => '1'
		),
		array(
			'aircraft_id' => '2',
			'cabin_id' => '2'
		),
		array(
			'aircraft_id' => '2',
			'cabin_id' => '3'
		),
		array(
			'aircraft_id' => '1',
			'cabin_id' => '1'
		),
		array(
			'aircraft_id' => '1',
			'cabin_id' => '2'
		),
		array(
			'aircraft_id' => '1',
			'cabin_id' => '3'
		),
	);
}
