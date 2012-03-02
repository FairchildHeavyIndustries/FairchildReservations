<?php
/* Flight Fixture generated on: 2012-02-10 06:36:31 : 1328855791 */

/**
 * FlightFixture
 *
 */
class FlightFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'carrier_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'aircraft_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'route_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'number' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'collate' => NULL, 'comment' => ''),
		'departure_airport' => array('type' => 'string', 'null' => false, 'length' => 3, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'arrival_airport' => array('type' => 'string', 'null' => false, 'length' => 3, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'start' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'end' => array('type' => 'date', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'monday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'tuesday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'wednesday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'thursday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'friday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'saturday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'sunday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'departure_time' => array('type' => 'time', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'arrival_time' => array('type' => 'time', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'aircraftId' => array('column' => 'aircraft_id', 'unique' => 0), 'carrierId' => array('column' => 'carrier_id', 'unique' => 0), 'departureAirport' => array('column' => 'departure_airport', 'unique' => 0), 'arrivalAiport' => array('column' => 'arrival_airport', 'unique' => 0), 'route_id' => array('column' => 'route_id', 'unique' => 0)),
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
			'carrier_id' => 1,
			'aircraft_id' => 1,
			'route_id' => 1,
			'number' => 100,
			'departure_airport' => 'ABC',
			'arrival_airport' => 'DEF',
			'start' => '2000-01-00',
			'end' => '2100-12-31',
			'monday' => '1',
			'tuesday' => '1',
			'wednesday' => '1',
			'thursday' => '1',
			'friday' => '1',
			'saturday' => '0',
			'sunday' => '0',
			'departure_time' => '06:00:00',
			'arrival_time' => '08:00:00'
		),
		array(
			'id' => 2,
			'carrier_id' => 1,
			'aircraft_id' => 2,
			'route_id' => 1,
			'number' => 200,
			'departure_airport' => 'ABC',
			'arrival_airport' => 'DEF',
			'start' => '2000-01-00',
			'end' => '2100-12-31',
			'monday' => '1',
			'tuesday' => '1',
			'wednesday' => '1',
			'thursday' => '1',
			'friday' => '1',
			'saturday' => '1',
			'sunday' => '1',
			'departure_time' => '12:00:00',
			'arrival_time' => '14:00:00'
		),
		array(
			'id' => 3,
			'carrier_id' => 1,
			'aircraft_id' => 2,
			'route_id' => 2,
			'number' => 300,
			'departure_airport' => 'DEF',
			'arrival_airport' => 'ABC',
			'start' => '2000-01-00',
			'end' => '2100-12-31',
			'monday' => '1',
			'tuesday' => '1',
			'wednesday' => '1',
			'thursday' => '1',
			'friday' => '1',
			'saturday' => '1',
			'sunday' => '1',
			'departure_time' => '12:00:00',
			'arrival_time' => '14:00:00'
		),
	);
}
