<div class="reservations form">
<?php echo $this->Form->create('Reservation');?>
	<fieldset>
		<legend><?php echo __('Add Reservation'); ?></legend>
	<?php
		echo $this->Form->input('pnr');
		echo $this->Form->input('is_active');
		echo $this->Form->input('created_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Reservations'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Res Cc Payments'), array('controller' => 'res_cc_payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Cc Payment'), array('controller' => 'res_cc_payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Fares'), array('controller' => 'res_fares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Fare'), array('controller' => 'res_fares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Fees'), array('controller' => 'res_fees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Fee'), array('controller' => 'res_fees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Flights'), array('controller' => 'res_flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Flight'), array('controller' => 'res_flights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Hotels'), array('controller' => 'res_hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Hotel'), array('controller' => 'res_hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Passengers'), array('controller' => 'res_passengers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Passenger'), array('controller' => 'res_passengers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Taxes'), array('controller' => 'res_taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Tax'), array('controller' => 'res_taxes', 'action' => 'add')); ?> </li>
	</ul>
</div>
