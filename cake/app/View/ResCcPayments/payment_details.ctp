<?php

//debug(SessionHelper::read());
?>
<div class="reservations form">
<?php echo $this->Form->create('ResCcPayment', array('action' => 'set_cc_payment' ));?>
	<fieldset>
		<legend><?php echo __('Payment Details'); ?></legend>
	<?php
		echo $this->Form->input('ResCcPayment.0.card_issuer_id');
		echo $this->Form->input('ResCcPayment.0.cc_number');
		echo $this->Form->input('ResCcPayment.0.expiration');		
		echo $this->Form->input('ResCcPayment.0.cvv');		
		echo $this->Form->input('ResCcPayment.0.amount');
		echo $this->Form->input('ResCcPayment.0.currency');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Confirm Booking'));?>
</div>
