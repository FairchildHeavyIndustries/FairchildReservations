<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * This is a placeholder class.
 * Create the same file in app/Controller/AppController.php
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       Cake.Controller
 * @link http://book.cakephp.org/view/957/The-App-Controller
 */
class AppController extends Controller {
	
	public function array_to_select_list($input_array)
	{
		$return_list = array_fill_keys(array_values($input_array), 'temp');
		foreach($input_array as $key => $value) {
		    $return_list[$value] = $value;
		}
				
		return $return_list;
		
	}
	
	public function weekday_from_date ($input_date)
	{
		list($month, $day, $year) = explode('/', $input_date);

		$cal_datetime = mktime(0, 0, 0, $month, $day, $year);
		
		return strtolower(date('l', $cal_datetime));
	}
	
	/**
	 * @codeCoverageIgnore
	 */
	public function request_data_to_session()
	{
		$this->Session->write('Search.departure_airport', $this->request->data['Flights']['Departure Airport']);
		$this->Session->write('Search.arrival_airport', $this->request->data['Flights']['Arrival Airport']);
		$this->Session->write('Search.departure_date', $this->request->data['Flights']['Departure Date']);
		$this->Session->write('Search.arrival_date', $this->request->data['Flights']['Arrival Date']);
		$this->Session->write('Search.direction', $this->request->data['Flights']['Direction']);
		$this->Session->write('Search.number_of_passengers', $this->request->data['Flights']['Number of Passengers']);
	}
	
	function multi_array_unique($array)
	{
	  $result = array_map("unserialize", array_unique(array_map("serialize", $array)));

	  foreach ($result as $key => $value)
	  {
	    if ( is_array($value) )
	    {
	      $result[$key] = $this->multi_array_unique($value);
	    }
	  }

	  return $result;
	}
	
	public function cabins_from_flights($input_flights)
	{
		foreach ($input_flights as $flight) {
			foreach ($flight['Aircraft']['Cabin'] as $cabin){
				$cabins[] = $cabin;
			};
		};
		usort($cabins, function ($a, $b) {                  
			if ($a['no_of_seat'] == $b['no_of_seat']) {
				return 0;
			}
			return ($a['no_of_seat'] > $b['no_of_seat']) ? -1 : 1;
			
		});
		return $cabins;
	}

	public function date_to_sql_date ($input_date)
	{
		list($month, $day, $year) = explode("/", $input_date);
		$sql_date = $year . '_' . $month . '_' . $day;
		return $sql_date;
	}
}
