<div class="resFlights form">
<?php echo $this->Form->create('ResFlight');?>
	<fieldset>
		<legend><?php echo __('Edit Res Flight'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('reservation_id');
		echo $this->Form->input('flight_id');
		echo $this->Form->input('cabin_id');
		echo $this->Form->input('date');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ResFlight.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ResFlight.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Res Flights'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flights'), array('controller' => 'flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight'), array('controller' => 'flights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cabins'), array('controller' => 'cabins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cabin'), array('controller' => 'cabins', 'action' => 'add')); ?> </li>
	</ul>
</div>
