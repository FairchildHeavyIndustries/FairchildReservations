<?php
App::uses('AppModel', 'Model');
/**
 * ResFare Model
 *
 */
class ResFare extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'fare_id';
	
/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Reservation' => array(
			'className' => 'Reservation',
			'foreignKey' => 'reservation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Fare' => array(
			'className' => 'Flight',
			'foreignKey' => 'fare_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

