<?php
/* Flight Fixture generated on: 2011-08-21 08:00:49 : 1313913649 */
class FlightFixture extends CakeTestFixture {
	var $name = 'Flight';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'carrier_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'aircraft_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'number' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 5),
		'departure_airport' => array('type' => 'string', 'null' => false, 'length' => 3, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'arrival_airport' => array('type' => 'string', 'null' => false, 'length' => 3, 'key' => 'index', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'start' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'end' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'monday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tuesday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'wednesday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'thursday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'friday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'saturday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sunday' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'departure_time' => array('type' => 'time', 'null' => false, 'default' => NULL),
		'arrival_time' => array('type' => 'time', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'aircraftId' => array('column' => 'aircraft_id', 'unique' => 0), 'carrierId' => array('column' => 'carrier_id', 'unique' => 0), 'departureAirport' => array('column' => 'departure_airport', 'unique' => 0), 'arrivalAiport' => array('column' => 'arrival_airport', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'carrier_id' => 1,
			'aircraft_id' => 1,
			'number' => 1,
			'departure_airport' => 'L',
			'arrival_airport' => 'L',
			'start' => '2011-08-21',
			'end' => '2011-08-21',
			'monday' => 'Lorem ipsum dolor sit ame',
			'tuesday' => 'Lorem ipsum dolor sit ame',
			'wednesday' => 'Lorem ipsum dolor sit ame',
			'thursday' => 'Lorem ipsum dolor sit ame',
			'friday' => 'Lorem ipsum dolor sit ame',
			'saturday' => 'Lorem ipsum dolor sit ame',
			'sunday' => 'Lorem ipsum dolor sit ame',
			'departure_time' => '08:00:49',
			'arrival_time' => '08:00:49'
		),
	);
}
