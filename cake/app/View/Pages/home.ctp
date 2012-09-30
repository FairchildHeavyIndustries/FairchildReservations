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
					
					
					echo $this->Form->input('departure_airport', array(
						'type'    => 'hidden',
					));
					
					?>
					<div id="departure_city_selekt" class="slkt_container enabled input">
						<label>Departure from</label>
					<?php 
						$this->AirportOptions->createDropdown($departure_data, "Departure");
					 ?>
						<div class="slkt_button" id="departure_slkt_button"><span class="slkt_text">Choose a City:</span></div>
					</div>
					<div id="arrival_city_selekt" class="slkt_container disabled input">
						<label>Arrival to</label>
						<div class="slkt_button" id="arrival_slkt_button"><span class="slkt_text"></span></div>
					</div>	
					<?php
					
					echo $this->Form->input('arrival_airport', array(
						'type'    => 'hidden',
					));
					?>
					<div class="input">
						

						<label id='departure_date'>Departure Date</label>
						<label id='arrival_date' class='right'>Arrival Date</label>
						<input name="data[Flights][departure_date]" class="calendar_input" type="text" id="FlightsDepartureDate">
						<input name="data[Flights][return_date]" class="calendar_input" type="text" id="FlightsArrivalDate">
					</div>		
						
					<?php

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
			<canvas id="departure_canvas" width="650" height="400"></canvas>
			<canvas id="arrival_canvas" width="650" height="400"></canvas>
			<canvas id="path_canvas" width="650" height="400"></canvas>
		</div>
		<div id="coords">
			
		</div>
	
		
	