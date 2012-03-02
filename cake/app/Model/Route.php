<?php
App::uses('AppModel', 'Model');
/**
 * Route Model
 *
 * @property StartAirport $StartAirport
 * @property EndAirport $EndAirport
 * @property Fare $Fare
 * @property Flight $Flight
 */
class Route extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'description';


/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'start_airport_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'end_airport_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
			'StartAirport' => array(
				'className' => 'Airport',
				'foreignKey' => 'start_airport_id',
				'conditions' => '',
				'fields' => '',
				'order' => ''
			),
			'EndAirport' => array(
				'className' => 'Airport',
				'foreignKey' => 'end_airport_id',
				'conditions' => '',
				'fields' => '',
				'order' => ''
			)
		);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Fare' => array(
			'className' => 'Fare',
			'foreignKey' => 'route_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)// ,
		// 		'Flight' => array(
		// 			'className' => 'Flight',
		// 			'foreignKey' => 'route_id',
		// 			'dependent' => false,
		// 			'conditions' => '',
		// 			'fields' => '',
		// 			'order' => '',
		// 			'limit' => '',
		// 			'offset' => '',
		// 			'exclusive' => '',
		// 			'finderQuery' => '',
		// 			'counterQuery' => ''
		// 		)
	);

}
