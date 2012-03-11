<?php
/* ResPassenger Fixture generated on: 2012-02-16 17:06:27 : 1329411987 */

/**
 * ResPassengerFixture
 *
 */

class ResPassengerFixture extends CakeTestFixture {


/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary', 'collate' => NULL, 'comment' => ''),
		'reservation_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index', 'collate' => NULL, 'comment' => ''),
		'seqn_no' => array('type' => 'integer', 'null' => true, 'default' => '1', 'collate' => NULL, 'comment' => ''),
		'first_name' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'last_name' => array('type' => 'string', 'null' => false, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'telephone' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30, 'collate' => 'latin1_swedish_ci', 'comment' => '', 'charset' => 'latin1'),
		'date_of_birth' => array('type' => 'date', 'null' => true, 'default' => NULL, 'collate' => NULL, 'comment' => ''),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'reservationId' => array('column' => 'reservation_id', 'unique' => 0)),
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
			'reservation_id' => 1,
			'seqn_no' => 1,
			'first_name' => 'Bob',
			'last_name' => 'Barker',
			'telephone' => '305 555 1212',
			'email' => 'bob@barker.com',
			'date_of_birth' => '1950-02-16'
		),
		array(
			'id' => 2,
			'reservation_id' => 1,
			'seqn_no' => 1,
			'first_name' => 'Bob',
			'last_name' => 'Barker',
			'telephone' => '305 555 1212',
			'email' => 'bob@barker.com',
			'date_of_birth' => '1950-02-16'
		),
		array(
			'id' => 3,
			'reservation_id' => 1,
			'seqn_no' => 1,
			'first_name' => 'Bob',
			'last_name' => 'Barker',
			'telephone' => '305 555 1212',
			'email' => 'bob@barker.com',
			'date_of_birth' => '1950-02-16'
		),
		array(
			'id' => 4,
			'reservation_id' => 1,
			'seqn_no' => 1,
			'first_name' => 'Bob',
			'last_name' => 'Barker',
			'telephone' => '305 555 1212',
			'email' => 'bob@barker.com',
			'date_of_birth' => '1950-02-16'
		),
		array(
			'id' => 5,
			'reservation_id' => 1,
			'seqn_no' => 1,
			'first_name' => 'Bob',
			'last_name' => 'Barker',
			'telephone' => '305 555 1212',
			'email' => 'bob@barker.com',
			'date_of_birth' => '1950-02-16'
		),
		array(
			'id' => 6,
			'reservation_id' => 1,
			'seqn_no' => 1,
			'first_name' => 'Bob',
			'last_name' => 'Barker',
			'telephone' => '305 555 1212',
			'email' => 'bob@barker.com',
			'date_of_birth' => '1950-02-16'
		),
		array(
			'id' => 7,
			'reservation_id' => 1,
			'seqn_no' => 1,
			'first_name' => 'Bob',
			'last_name' => 'Barker',
			'telephone' => '305 555 1212',
			'email' => 'bob@barker.com',
			'date_of_birth' => '1950-02-16'
		),
		array(
			'id' => 8,
			'reservation_id' => 1,
			'seqn_no' => 1,
			'first_name' => 'Bob',
			'last_name' => 'Barker',
			'telephone' => '305 555 1212',
			'email' => 'bob@barker.com',
			'date_of_birth' => '1950-02-16'
		),
		array(
			'id' => 9,
			'reservation_id' => 1,
			'seqn_no' => 1,
			'first_name' => 'Bob',
			'last_name' => 'Barker',
			'telephone' => '305 555 1212',
			'email' => 'bob@barker.com',
			'date_of_birth' => '1950-02-16'
		),
		array(
			'id' => 10,
			'reservation_id' => 1,
			'seqn_no' => 1,
			'first_name' => 'Bob',
			'last_name' => 'Barker',
			'telephone' => '305 555 1212',
			'email' => 'bob@barker.com',
			'date_of_birth' => '1950-02-16'
		),
		array(
			'id' => 11,
			'reservation_id' => 1,
			'seqn_no' => 1,
			'first_name' => 'Bob',
			'last_name' => 'Barker',
			'telephone' => '305 555 1212',
			'email' => 'bob@barker.com',
			'date_of_birth' => '1950-02-16'
		)
	);
}
