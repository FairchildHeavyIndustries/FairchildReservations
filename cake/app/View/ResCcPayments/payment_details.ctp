<?php

//debug(SessionHelper::read());
?>
<table border ="1" cellpadding="0" cellspacing="0">
	<caption>Price</caption>
	<?php
	foreach ($Pricing as $price): ?>
	<tr>
		<td><?php echo $price['Type'] ?></td><td><?php echo $price['Description'] ?></td><td><?php echo $price['amount'] ?></td>
	</tr>
	<?php endforeach ?>
	<tr>
		<td></td><td><strong>Total</strong></td><td><?php echo $Total ?></td>
	</tr>
</table>
	
<div class="reservations form">
<?php echo $this->Form->create('ResCcPayment', array('action' => 'set_cc_payment' ));?>
	<fieldset>
		<legend><?php echo __('Payment Details'); ?></legend>
	<?php
		echo $this->Form->input('ResCcPayment.0.card_issuer_id');
		echo $this->Form->input('ResCcPayment.0.cc_number');
		echo $this->Form->input('ResCcPayment.0.expiration');		
		echo $this->Form->input('ResCcPayment.0.cvv');		
		echo $this->Form->input('ResCcPayment.0.amount', array('value' => $Total, 'disabled' => true ) );
		echo $this->Form->input('ResCcPayment.0.currency');

	 echo $this->Form->end(__('Confirm Booking'));
	?>
	</fieldset>

</div>
