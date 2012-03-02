<div class="resCcPayments form">
<?php echo $this->Form->create('ResCcPayment');?>
	<fieldset>
		<legend><?php echo __('Add Res Cc Payment'); ?></legend>
	<?php
		echo $this->Form->input('reservation_id');
		echo $this->Form->input('card_issuer_id');
		echo $this->Form->input('cc_number');
		echo $this->Form->input('amount');
		echo $this->Form->input('currency');
		echo $this->Form->input('expiration');
		echo $this->Form->input('cvv');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Res Cc Payments'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Issuers'), array('controller' => 'card_issuers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Issuer'), array('controller' => 'card_issuers', 'action' => 'add')); ?> </li>
	</ul>
</div>
