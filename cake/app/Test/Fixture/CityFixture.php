<?php
/* City Fixture generated on: 2012-01-28 23:22:46 : 1327792966 */

/**
 * CityFixture
 *
 */
class CityFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'currency' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'position_x' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'collate' => NULL, 'comment' => ''),
		'position_y' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 5, 'collate' => NULL, 'comment' => ''),
		'gMT_offset' => array('type' => 'time', 'null' => false, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'dST_start' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'dST_end' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'dST_offset' => array('type' => 'time', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'is_active' => array('type' => 'boolean', 'null' => false, 'default' => '1', 'collate' => NULL, 'comment' => ''),
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
			'name' => 'Lorem ipsum dolor sit amet',
			'currency' => 'L',
			'position_x' => 1,
			'position_y' => 1,
			'gMT_offset' => '23:22:46',
			'dST_start' => '2012-01-28',
			'dST_end' => '2012-01-28',
			'dST_offset' => '23:22:46',
			'is_active' => 1
		),
	);
}
