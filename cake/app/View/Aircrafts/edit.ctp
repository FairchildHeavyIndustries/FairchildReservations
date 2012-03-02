<div class="aircrafts form">
<?php echo $this->Form->create('Aircraft');?>
	<fieldset>
		<legend><?php echo __('Edit Aircraft'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('Cabin');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aircraft.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aircraft.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aircrafts'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Flights'), array('controller' => 'flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight'), array('controller' => 'flights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cabins'), array('controller' => 'cabins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cabin'), array('controller' => 'cabins', 'action' => 'add')); ?> </li>
	</ul>
</div>
