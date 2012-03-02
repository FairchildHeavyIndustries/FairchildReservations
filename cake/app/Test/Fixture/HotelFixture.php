<?php
/* Hotel Fixture generated on: 2012-01-29 20:24:11 : 1327868651 */

/**
 * HotelFixture
 *
 */
class HotelFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'hotel_name' => array('type' => 'string', 'null' => false, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'city_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'image_name' => array('type' => 'string', 'null' => false, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'rating' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 1, 'collate' => NULL, 'comment' => ''),
		'description' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 200, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'nightly_rate' => array('type' => 'float', 'null' => true, 'default' => NULL, 'length' => '7,5', 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'cityId' => array('column' => 'city_id', 'unique' => 0)),
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
			'hotel_name' => 'Lorem ipsum dolor sit amet',
			'city_id' => 1,
			'image_name' => 'Lorem ipsum dolor sit amet',
			'rating' => 1,
			'description' => 'Lorem ipsum dolor sit amet',
			'nightly_rate' => 1
		),
	);
}
