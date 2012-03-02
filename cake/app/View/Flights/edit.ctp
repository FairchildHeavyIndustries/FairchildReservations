<div class="flights form">
<?php echo $this->Form->create('Flight');?>
	<fieldset>
		<legend><?php echo __('Edit Flight'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('carrier_id');
		echo $this->Form->input('aircraft_id');
		echo $this->Form->input('number');
		echo $this->Form->input('departure_airport');
		echo $this->Form->input('arrival_airport');
		echo $this->Form->input('start');
		echo $this->Form->input('end');
		echo $this->Form->input('monday');
		echo $this->Form->input('tuesday');
		echo $this->Form->input('wednesday');
		echo $this->Form->input('thursday');
		echo $this->Form->input('friday');
		echo $this->Form->input('saturday');
		echo $this->Form->input('sunday');
		echo $this->Form->input('departure_time');
		echo $this->Form->input('arrival_time');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Flight.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Flight.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Flights'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Carriers'), array('controller' => 'carriers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrier'), array('controller' => 'carriers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aircrafts'), array('controller' => 'aircrafts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aircraft'), array('controller' => 'aircrafts', 'action' => 'add')); ?> </li>
	</ul>
</div>
