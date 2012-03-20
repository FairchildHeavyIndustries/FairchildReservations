<?php
/* Reservation Fixture generated on: 2012-02-13 21:35:53 : 1329168953 */

/**
 * ReservationFixture
 *
 */
class ReservationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'pnr' => array('type' => 'string', 'null' => false, 'length' => 6, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'is_active' => array('type' => 'integer', 'null' => false, 'default' => '1', 'length' => 1, 'collate' => NULL, 'comment' => ''),
		'created_date' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP', 'collate' => NULL, 'comment' => ''),
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
			'pnr' => 'BBZBBB',
			'is_active' => 1,
			'created_date' => 1329168953
		),
		array(
			'id' => 99,
			'pnr' => 'BCDFJK',
			'is_active' => 1,
			'created_date' => 1329168953
		),
	);
}
