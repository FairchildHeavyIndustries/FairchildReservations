<?php

//debug(SessionHelper::read());
?>

<table cellpadding="0" cellspacing="0" id='payment_details'>
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
		echo $this->Form->input('ResCcPayment.0.cc_number', array(
			'class'	=> 'required numeric'
		));
		echo $this->Form->input('ResCcPayment.0.expiration', array(
			'class'	=> 'required numeric'
		));		
		echo $this->Form->input('ResCcPayment.0.cvv', array(
			'class'	=> 'required numeric'
		));		
		echo $this->Form->input('ResCcPayment.0.amount', array('value' => $Total, 'disabled' => false ) );
		echo $this->Form->input('ResCcPayment.0.currency', array(
			'type'    => 'select',
			'options' => array('USD' => 'USD'),
		));

	 echo $this->Form->end(__('Confirm Booking'));
	?>
	</fieldset>

</div>
