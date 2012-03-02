<div class="resFlights index">
	<h2><?php echo __('Res Flights');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('reservation_id');?></th>
			<th><?php echo $this->Paginator->sort('flight_id');?></th>
			<th><?php echo $this->Paginator->sort('cabin_id');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('is_active');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($resFlights as $resFlight): ?>
	<tr>
		<td><?php echo h($resFlight['ResFlight']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resFlight['Reservation']['pnr'], array('controller' => 'reservations', 'action' => 'view', $resFlight['Reservation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($resFlight['Flight']['number'], array('controller' => 'flights', 'action' => 'view', $resFlight['Flight']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($resFlight['Cabin']['name'], array('controller' => 'cabins', 'action' => 'view', $resFlight['Cabin']['id'])); ?>
		</td>
		<td><?php echo h($resFlight['ResFlight']['date']); ?>&nbsp;</td>
		<td><?php echo h($resFlight['ResFlight']['is_active']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $resFlight['ResFlight']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resFlight['ResFlight']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resFlight['ResFlight']['id']), null, __('Are you sure you want to delete # %s?', $resFlight['ResFlight']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Res Flight'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flights'), array('controller' => 'flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight'), array('controller' => 'flights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cabins'), array('controller' => 'cabins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cabin'), array('controller' => 'cabins', 'action' => 'add')); ?> </li>
	</ul>
</div>
