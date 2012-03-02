<div class="hotels form">
<?php echo $this->Form->create('Hotel');?>
	<fieldset>
		<legend><?php echo __('Add Hotel'); ?></legend>
	<?php
		echo $this->Form->input('hotel_name');
		echo $this->Form->input('city_id');
		echo $this->Form->input('image_name');
		echo $this->Form->input('rating');
		echo $this->Form->input('description');
		echo $this->Form->input('nightly_rate');
		echo $this->Form->input('Reservation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Hotels'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>
