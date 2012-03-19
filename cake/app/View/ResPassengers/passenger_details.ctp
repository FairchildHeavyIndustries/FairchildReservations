<?php
//debug($request_data);
//debug(SessionHelper::read());
?>
<div class="res_passengers form">
<?php echo $this->Form->create('ResPassenger', array('action' => 'set_passenger_details' ));?>
	<fieldset>
		<legend><?php echo __('Passenger Details'); ?></legend>
	<?php
		$pax_index = 0; 
		while ( $pax_index < SessionHelper::read('Search.number_of_passengers')):
		?>	
		<h2>Passenger&nbsp;<?php echo $pax_index + 1 ?></h2>
		<?php
			echo $this->Form->hidden('ResPassenger.'  . $pax_index . '.seqn_no', array('value' => $pax_index));
			echo $this->Form->input('ResPassenger.'  . $pax_index . '.first_name');
			echo $this->Form->input('ResPassenger.'  . $pax_index . '.last_name');
			echo $this->Form->input('ResPassenger.'  . $pax_index . '.telephone');
			echo $this->Form->input('ResPassenger.'  . $pax_index . '.email');
			echo $this->Form->input('ResPassenger.'  . $pax_index . '.date_of_birth', array(
				'type'	=> 'text',
				'class' => 'calendar_input',
				'id'	=> 'birth_date_' . $pax_index 
			));
			$pax_index++;
		endwhile;
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
