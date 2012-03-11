<?php
/**
 * FRSSessionComponent. Provides a testable mock to the cake SessionsComponent from the Controller layer
 *
 */

App::uses('SessionComponent', 'Controller/Component');
App::uses('CakeSession', 'Model/Datasource');

/**
 * The CakePHP SessionComponent provides a way to persist client data between 
 * page requests. It acts as a wrapper for the `$_SESSION` as well as providing 
 * convenience methods for several `$_SESSION` related functions.
 *
 * @package       Cake.Controller.Component
 * @link http://book.cakephp.org/2.0/en/core-libraries/components/sessions.html
 * @link http://book.cakephp.org/2.0/en/development/sessions.html
 */
class FRSSessionComponent extends SessionComponent {

	public $STUB_SESSION = array(
		"Search" => array(
			"departure_airport" => 'MIA',
	        "arrival_airport" => 'SDQ',
	        "departure_date" => '03/19/2012',
	        "arrival_date" => '03/21/2012',
	        "direction" => 'rt',
	        "number_of_passengers" => 3
		)
	);
	
	public function read($name = null) {
		if (!CakeSession::id()) {
			return Set::classicExtract($this->STUB_SESSION, $name);
		}
		return parent::read($name);
	}
	
	
	
}

?>