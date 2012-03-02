<div class="cabins view">
<h2><?php  echo __('Cabin');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cabin['Cabin']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cabin['Cabin']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('No Of Seat'); ?></dt>
		<dd>
			<?php echo h($cabin['Cabin']['no_of_seat']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cabin'), array('action' => 'edit', $cabin['Cabin']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cabin'), array('action' => 'delete', $cabin['Cabin']['id']), null, __('Are you sure you want to delete # %s?', $cabin['Cabin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cabins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cabin'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fares'), array('controller' => 'fares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fare'), array('controller' => 'fares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservation Flights'), array('controller' => 'reservation_flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation Flight'), array('controller' => 'reservation_flights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aircrafts'), array('controller' => 'aircrafts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aircraft'), array('controller' => 'aircrafts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Fares');?></h3>
	<?php if (!empty($cabin['Fare'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Start Airport'); ?></th>
		<th><?php echo __('End Airport'); ?></th>
		<th><?php echo __('Currency'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Cabin Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cabin['Fare'] as $fare): ?>
		<tr>
			<td><?php echo $fare['id'];?></td>
			<td><?php echo $fare['start_airport'];?></td>
			<td><?php echo $fare['end_airport'];?></td>
			<td><?php echo $fare['currency'];?></td>
			<td><?php echo $fare['is_active'];?></td>
			<td><?php echo $fare['amount'];?></td>
			<td><?php echo $fare['cabin_id'];?></td>
			<td><?php echo $fare['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fares', 'action' => 'view', $fare['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fares', 'action' => 'edit', $fare['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fares', 'action' => 'delete', $fare['id']), null, __('Are you sure you want to delete # %s?', $fare['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fare'), array('controller' => 'fares', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Reservation Flights');?></h3>
	<?php if (!empty($cabin['ReservationFlight'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Flight Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Cabin Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cabin['ReservationFlight'] as $reservationFlight): ?>
		<tr>
			<td><?php echo $reservationFlight['id'];?></td>
			<td><?php echo $reservationFlight['flight_id'];?></td>
			<td><?php echo $reservationFlight['date'];?></td>
			<td><?php echo $reservationFlight['is_active'];?></td>
			<td><?php echo $reservationFlight['cabin_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reservation_flights', 'action' => 'view', $reservationFlight['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reservation_flights', 'action' => 'edit', $reservationFlight['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reservation_flights', 'action' => 'delete', $reservationFlight['id']), null, __('Are you sure you want to delete # %s?', $reservationFlight['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reservation Flight'), array('controller' => 'reservation_flights', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Aircrafts');?></h3>
	<?php if (!empty($cabin['Aircraft'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cabin['Aircraft'] as $aircraft): ?>
		<tr>
			<td><?php echo $aircraft['id'];?></td>
			<td><?php echo $aircraft['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'aircrafts', 'action' => 'view', $aircraft['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'aircrafts', 'action' => 'edit', $aircraft['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'aircrafts', 'action' => 'delete', $aircraft['id']), null, __('Are you sure you want to delete # %s?', $aircraft['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Aircraft'), array('controller' => 'aircrafts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
