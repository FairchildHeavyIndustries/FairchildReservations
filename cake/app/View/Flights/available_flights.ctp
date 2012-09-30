<?php 

//debug(SessionHelper::read());
//debug($flights);
?>
<div class="flights index">
	<h2><?php echo $airports['from_airport'] . " to " . $airports['to_airport'] . " Flights"; ?></h2>
	<?php 
			echo $this->Form->create('Flights', array('action' => $action ));
			 
	?>
	<table cellpadding="0" cellspacing="0" class='available_flights'>
	<tr>
			<th>Flight Number</th>
			<th>Departure Time</th>
			<th>Arrival Time</th>
			<?php foreach ($cabins as $cabin): ?>
			<th><?php echo h($cabin['name']) ?>	</th>
			<?php endforeach; ?>
	</tr>
	<div id="tab header">
		<?php 
			echo  $this->Time->format('M jS', $flight_date) ;
			echo $this->Form->hidden('date', array('value' => $this->Time->format('Y-m-d', $flight_date)));  
		?>
	</div>
	<?php
	foreach ($flights as $flight): ?>

	<tr>
		<td><?php echo trim($flight['Carrier']['name'] . $flight['Flight']['number']); ?></td>
		<td><?php echo $this->Time->format('h:i A', $flight['Flight']['departure_time']); ?></td>
		<td><?php echo $this->Time->format('h:i A', $flight['Flight']['arrival_time']); ?></td>
		<?php foreach ($cabins as $cabin): 
			foreach ($flight['Route']['Fare'] as $fare){
				if ($fare['cabin_id'] == $cabin['id']){
					foreach ($flight['Aircraft']['Cabin'] as $fltCabin) {
						if ($cabin['id'] == $fltCabin['id']) {
							$fare_id = $fare['id'];
							$fare_amount = $fare['amount'];
							$fare_currency = $fare['currency'];
							break 2;
						}
					}
				} else {
					$fare_id = 	$fare_amount = $fare_currency = null;
				}
			};
		
		?>
		<td class='cabin_picker'>
			<?php 
				if ($fare_id) {
					$flightPriceInfo= $flight['Flight']['id'] . "_" . $cabin['id'] . "_" . $fare_id;
					echo "<input type='radio' name='" . $radio_name . "' id='fare_" . $cabin['id'] . "' value='" .  $flightPriceInfo . "'>"; 
					echo $this->Number->currency($fare_amount, $fare_currency);
				}
			?>
			
		</td>
		<?php endforeach; ?>
	</tr>
<?php endforeach; ?>
	</table>
<?php echo $this->Form->end('Continue');  ?>
</div>
