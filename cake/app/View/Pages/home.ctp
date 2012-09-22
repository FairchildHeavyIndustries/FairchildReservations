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

App::uses('Debugger', 'Utility');
?>


		<div id="search_wrapper">
			<div id='tabs'>
				<ul>
					<li>
						<a href="#tabs-1">Search for Flights</a>
					</li>
					<li>
						<a href="#tabs-2">My Bookings</a>
					</li>
				</ul>
				
				<div id='tabs-1'>
				
				<?php 
					
					echo $this->Form->create('Flights', array('action' => 'outbound_flights' )); 
					
					echo $this->Form->radio('direction', array(
						'ow'	=> 'One Way',
						'rt' 	=> 'Round Trip',
						), array(
							'value' => 'rt',
							'legend' => false
						)
					);
					
					?>

						
					<?php
					
					$this->AirportOptions->createOptions($departure_data, "Departure");
					$this->AirportOptions->createOptions($arrival_data, "Arrival");
					/*echo $this->Form->input('arrival_airport', array(
						'type'    => 'select',
						'options' => $arrival_airport_list,
						'empty'   => true,
						'label'	=> 'Arrival Airport'
					));*/
					echo $this->Form->input('departure_date', array(
						'type'	=> 'text',
						'class' => 'calendar_input',
						'label'	=> 'Departure Date'
					));
					echo $this->Form->input('return_date', array(
						'type'	=> 'text',
						'class' => 'calendar_input',
						'label'	=> 'Return Date'
					));
					
					echo $this->Form->input('number_of_passengers', array(
						'type'    => 'select',
						'options' => array('1' => '1', '2'=> '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6'),
						'id'	=> 'Number of Passengers'
					));
					
					echo $this->Form->end('Search'); 
				?>
				
				 
				
				</div>
				<div id='tabs-2'>
					<label for="enter_locator">Enter Locator<input type="text" name="enter_locator" value="" id="enter_locator"></label>
				</div>
			</div>
		</div>
		<div id="map_container">
			<img src='/img/map_bgrnd.png' width='650' height='400'></img>
		
		 <canvas id="map_canvas" width="650" height="400"></canvas>
		</div>
		<div id="coords">
			
		</div>
	
		
	