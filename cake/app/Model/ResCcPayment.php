<?php
App::uses('AppModel', 'Model');
/**
 * ResCcPayment Model
 *
 * @property Reservation $Reservation
 * @property CardIssuer $CardIssuer
 */
class ResCcPayment extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
/*
	public $validate = array(
		'reservation_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'card_issuer_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cc_number' => array(
		        'rule'    => array('cc', array('visa', 'mc', 'amex', 'disc'), false, null),
		        'message' => 'The credit card number you supplied was invalid.'
				),
		'expiration' => array(
				'rule' => array('datetime', 'my'),
				//'message' => 'Date must be in mm/yyyy format',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations

		),
		'cvv' => array(
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
*/
	//The Associations below have been created with all possible keys, those that are not needed can be removed

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
		'CardIssuer' => array(
			'className' => 'CardIssuer',
			'foreignKey' => 'card_issuer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
