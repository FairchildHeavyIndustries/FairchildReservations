<?php
/* Cabin Fixture generated on: 2012-01-28 22:11:17 : 1327788677 */

/**
 * CabinFixture
 *
 */
class CabinFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'no_of_seat' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3, 'collate' => NULL, 'comment' => ''),
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
			'name' => 'Coach',
			'no_of_seat' => 80
		),
		array(
			'id' => 2,
			'name' => 'Business',
			'no_of_seat' => 20
		),
		array(
			'id' => 3,
			'name' => 'First',
			'no_of_seat' => 10
		),
	);
}
