<div class="reservations index">
	<h2><?php echo __('Reservations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('pnr');?></th>
			<th><?php echo $this->Paginator->sort('is_active');?></th>
			<th><?php echo $this->Paginator->sort('created_date');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($reservations as $reservation): ?>
	<tr>
		<td><?php echo h($reservation['Reservation']['id']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['pnr']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($reservation['Reservation']['created_date']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reservation['Reservation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reservation['Reservation']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reservation['Reservation']['id']), null, __('Are you sure you want to delete # %s?', $reservation['Reservation']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Reservation'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customers'), array('controller' => 'customers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer'), array('controller' => 'customers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Fares'), array('controller' => 'res_fares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Fare'), array('controller' => 'res_fares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Fees'), array('controller' => 'res_fees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Fee'), array('controller' => 'res_fees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Flights'), array('controller' => 'res_flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Flight'), array('controller' => 'res_flights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Hotels'), array('controller' => 'res_hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Hotel'), array('controller' => 'res_hotels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Taxes'), array('controller' => 'res_taxes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Tax'), array('controller' => 'res_taxes', 'action' => 'add')); ?> </li>
	</ul>
</div>
