<?php
App::uses('AppModel', 'Model');
/**
 * Flight Model
 *
 * @property Carrier $Carrier
 * @property Aircraft $Aircraft
 * @property Route $Route
 * @property Reservation $Reservation
 * @property Fare $Fare
 */
class Flight extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'number';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Carrier' => array(
			'className' => 'Carrier',
			'foreignKey' => 'carrier_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Aircraft' => array(
			'className' => 'Aircraft',
			'foreignKey' => 'aircraft_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Route' => array(
			'className' => 'Route',
			'foreignKey' => 'route_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	// public $hasAndBelongsToMany = array(
	// 	'Reservation' => array(
	// 		'className' => 'Reservation',
	// 		'joinTable' => 'reservation_flights',
	// 		'foreignKey' => 'flight_id',
	// 		'associationForeignKey' => 'reservation_id',
	// 		'unique' => true,
	// 		'conditions' => '',
	// 		'fields' => '',
	// 		'order' => '',
	// 		'limit' => '',
	// 		'offset' => '',
	// 		'finderQuery' => '',
	// 		'deleteQuery' => '',
	// 		'insertQuery' => ''
	// 	),
	// 	'Fare' => array(
	// 		'className' => 'Fare',
	// 		'joinTable' => 'fares_flights',
	// 		'foreignKey' => 'flight_id',
	// 		'associationForeignKey' => 'fare_id',
	// 		'unique' => true,
	// 		'conditions' => '',
	// 		'fields' => '',
	// 		'order' => '',
	// 		'limit' => '',
	// 		'offset' => '',
	// 		'finderQuery' => '',
	// 		'deleteQuery' => '',
	// 		'insertQuery' => ''
	// 	)
	// );

}
