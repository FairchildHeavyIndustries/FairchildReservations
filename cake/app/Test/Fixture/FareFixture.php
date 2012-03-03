<?php
/* Fare Fixture generated on: 2012-03-03 02:26:58 : 1330741618 */

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
		'route_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'cabin_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'amount' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '7,3', 'collate' => NULL, 'comment' => ''),
		'currency' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'is_active' => array('type' => 'string', 'null' => false, 'default' => '1', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'cabinId' => array('column' => 'cabin_id', 'unique' => 0), 'route_id' => array('column' => 'route_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '9',
			'route_id' => '2',
			'cabin_id' => '1',
			'amount' => '133.000',
			'currency' => 'USD',
			'name' => 'cheap!',
			'is_active' => '1'
		),
		array(
			'id' => '10',
			'route_id' => '1',
			'cabin_id' => '1',
			'amount' => '100.000',
			'currency' => 'USD',
			'name' => 'coach fare',
			'is_active' => '1'
		),
		array(
			'id' => '11',
			'route_id' => '1',
			'cabin_id' => '2',
			'amount' => '300.000',
			'currency' => 'USD',
			'name' => 'firstclass fare',
			'is_active' => '1'
		),
		array(
			'id' => '12',
			'route_id' => '2',
			'cabin_id' => '2',
			'amount' => '450.000',
			'currency' => 'USD',
			'name' => 'Pricey',
			'is_active' => '1'
		),
	);
}
