<?php
/**
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
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<title></title>
	</head>
	<body>
		<div id="main"></div>
		<div id="search_wrapper">
			<div id='search_tab'>
				<h3>
					Search for Flights
				</h3>
				<?php 
					
					echo $this->Form->create('Flights', array('action' => 'outbound_flights' )); 
					
					echo $this->Form->radio('Direction', array(
						'ow'	=> 'One Way',
						'rt' 	=> 'Round Trip',
						), array(
							'value' => 'rt',
							'id' => 'one_way',
							'legend' => false
						)
					);
					
					echo $this->Form->input('Departure Airport', array(
						'type'    => 'select',
						'options' => $departure_airport_list,
						'empty'   => true
					));
					
					echo $this->Form->input('Arrival Airport', array(
						'type'    => 'select',
						'options' => $arrival_airport_list,
						'empty'   => true
					));
					echo $this->Form->input('Departure Date', array(
						'type'	=> 'text',
						'class' => 'calendar_input',
						'id'	=> 'departure_date'
					));
					echo $this->Form->input('Return Date', array(
						'type'	=> 'text',
						'class' => 'calendar_input',
						'id'	=> 'arrival_date'
					));
					
					echo $this->Form->input('Number of Passengers', array(
						'type'    => 'select',
						'options' => array('1' => '1', '2'=> '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'),
						'id'	=> 'number_of_passengers'
					));
					
					echo $this->Form->end('Search'); 
				?>
				
				 
				
			</div>
			<div id='reservation_tab'>
				<h3>
					My Bookings
				</h3><label for="enter_locator">Enter Locator<input type="text" name="enter_locator" value="" id="enter_locator"></label>
			</div>
		</div>
		<div id="console_wrapper">
			<h3>
				the console
			</h3>
			<div id="map_container">
				<div id="map_background" class='map_image'></div>
			</div><span id='console'></span>
		</div>
	</body>
</html>
