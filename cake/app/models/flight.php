<?php
class Flight extends AppModel {
	var $name = 'Flight';
	var $displayField = 'number';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Carrier' => array(
			'className' => 'Carrier',
			'foreignKey' => 'carrier_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
