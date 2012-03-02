<?php
App::uses('AppModel', 'Model');
/**
 * Aircraft Model
 *
 * @property Flight $Flight
 * @property Cabin $Cabin
 */
class Aircraft extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';	
	
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	// public $hasMany = array(
	// 	'Flight' => array(
	// 		'className' => 'Flight',
	// 		'foreignKey' => 'aircraft_id',
	// 		'dependent' => false,
	// 		'conditions' => '',
	// 		'fields' => '',
	// 		'order' => '',
	// 		'limit' => '',
	// 		'offset' => '',
	// 		'exclusive' => '',
	// 		'finderQuery' => '',
	// 		'counterQuery' => ''
	// 	)
	// );


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Cabin' => array(
			'className' => 'Cabin',
			'joinTable' => 'aircrafts_cabins',
			'foreignKey' => 'aircraft_id',
			'associationForeignKey' => 'cabin_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
