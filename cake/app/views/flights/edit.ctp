<div class="flights form">
<?php echo $this->Form->create('Flight');?>
	<fieldset>
		<legend><?php __('Edit Flight'); ?></legend>
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
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Flight.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Flight.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Flights', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Carriers', true), array('controller' => 'carriers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrier', true), array('controller' => 'carriers', 'action' => 'add')); ?> </li>
	</ul>
</div>