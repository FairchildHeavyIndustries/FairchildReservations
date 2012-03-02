<div class="reservations view">
<h2><?php  echo __('Reservation');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pnr'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['pnr']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created Date'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['created_date']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="related">
	<h3><?php echo __('Related Res Passengers');?></h3>
	<?php if (!empty($reservation['ResPassenger'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reservation Id'); ?></th>
		<th><?php echo __('Seqn No'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Telephone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Date Of Birth'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($reservation['ResPassenger'] as $resPassenger): ?>
		<tr>
			<td><?php echo $resPassenger['id'];?></td>
			<td><?php echo $resPassenger['reservation_id'];?></td>
			<td><?php echo $resPassenger['seqn_no'];?></td>
			<td><?php echo $resPassenger['first_name'];?></td>
			<td><?php echo $resPassenger['last_name'];?></td>
			<td><?php echo $resPassenger['telephone'];?></td>
			<td><?php echo $resPassenger['email'];?></td>
			<td><?php echo $resPassenger['date_of_birth'];?></td>		
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

<div class="related">
	<h3><?php echo __('Related Res Flights');?></h3>
	<?php if (!empty($reservation['ResFlight'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reservation Id'); ?></th>
		<th><?php echo __('Flight Id'); ?></th>
		<th><?php echo __('Cabin Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($reservation['ResFlight'] as $resFlight): ?>
		<tr>
			<td><?php echo $resFlight['id'];?></td>
			<td><?php echo $resFlight['reservation_id'];?></td>
			<td><?php echo $resFlight['flight_id'];?></td>
			<td><?php echo $resFlight['cabin_id'];?></td>
			<td><?php echo $resFlight['date'];?></td>
			<td><?php echo $resFlight['is_active'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>

<div class="related">
	<h3><?php echo __('Related Res Cc Payments');?></h3>
	<?php if (!empty($reservation['ResCcPayment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reservation Id'); ?></th>
		<th><?php echo __('Card Issuer Id'); ?></th>
		<th><?php echo __('Cc Number'); ?></th>
		<th><?php echo __('Expiration'); ?></th>
		<th><?php echo __('Cvv'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Currency'); ?></th>

	</tr>
	<?php
		$i = 0;
		foreach ($reservation['ResCcPayment'] as $resCcPayment): ?>
		<tr>
			<td><?php echo $resCcPayment['id'];?></td>
			<td><?php echo $resCcPayment['reservation_id'];?></td>
			<td><?php echo $resCcPayment['card_issuer_id'];?></td>
			<td><?php echo $resCcPayment['cc_number'];?></td>
			<td><?php echo $resCcPayment['expiration'];?></td>
			<td><?php echo $resCcPayment['cvv'];?></td>
			<td><?php echo $resCcPayment['amount'];?></td>
			<td><?php echo $resCcPayment['currency'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Res Fares');?></h3>
	<?php if (!empty($reservation['ResFare'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reservation Id'); ?></th>
		<th><?php echo __('Fare Id'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($reservation['ResFare'] as $resFare): ?>
		<tr>
			<td><?php echo $resFare['id'];?></td>
			<td><?php echo $resFare['reservation_id'];?></td>
			<td><?php echo $resFare['fare_id'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<h3><?php echo __('Related Res Fees');?></h3>
	<?php if (!empty($reservation['ResFee'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Fee Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Reservation Id'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($reservation['ResFee'] as $resFee): ?>
		<tr>
			<td><?php echo $resFee['id'];?></td>
			<td><?php echo $resFee['fee_id'];?></td>
			<td><?php echo $resFee['amount'];?></td>
			<td><?php echo $resFee['reservation_id'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>

<div class="related">
	<h3><?php echo __('Related Res Hotels');?></h3>
	<?php if (!empty($reservation['ResHotel'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reservation Id'); ?></th>
		<th><?php echo __('Hotel Id'); ?></th>
		<th><?php echo __('Nightly Rate'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('No Of Nights'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($reservation['ResHotel'] as $resHotel): ?>
		<tr>
			<td><?php echo $resHotel['id'];?></td>
			<td><?php echo $resHotel['reservation_id'];?></td>
			<td><?php echo $resHotel['hotel_id'];?></td>
			<td><?php echo $resHotel['nightly_rate'];?></td>
			<td><?php echo $resHotel['is_active'];?></td>
			<td><?php echo $resHotel['no_of_nights'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>


</div>
<div class="related">
	<h3><?php echo __('Related Res Taxes');?></h3>
	<?php if (!empty($reservation['ResTax'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Reservation Id'); ?></th>
		<th><?php echo __('Tax Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($reservation['ResTax'] as $resTax): ?>
		<tr>
			<td><?php echo $resTax['id'];?></td>
			<td><?php echo $resTax['reservation_id'];?></td>
			<td><?php echo $resTax['tax_id'];?></td>
			<td><?php echo $resTax['amount'];?></td>
		
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>
