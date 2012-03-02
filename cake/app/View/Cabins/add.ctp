<div class="cabins form">
<?php echo $this->Form->create('Cabin');?>
	<fieldset>
		<legend><?php echo __('Add Cabin'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('no_of_seat');
		echo $this->Form->input('Aircraft');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cabins'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Fares'), array('controller' => 'fares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fare'), array('controller' => 'fares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservation Flights'), array('controller' => 'reservation_flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation Flight'), array('controller' => 'reservation_flights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aircrafts'), array('controller' => 'aircrafts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aircraft'), array('controller' => 'aircrafts', 'action' => 'add')); ?> </li>
	</ul>
</div>
