<div class="resPassengers index">
	<h2><?php echo __('Res Passengers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('reservation_id');?></th>
			<th><?php echo $this->Paginator->sort('seqn_no');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('telephone');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($resPassengers as $resPassenger): ?>
	<tr>
		<td><?php echo h($resPassenger['ResPassenger']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resPassenger['Reservation']['id'], array('controller' => 'reservations', 'action' => 'view', $resPassenger['Reservation']['id'])); ?>
		</td>
		<td><?php echo h($resPassenger['ResPassenger']['seqn_no']); ?>&nbsp;</td>
		<td><?php echo h($resPassenger['ResPassenger']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($resPassenger['ResPassenger']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($resPassenger['ResPassenger']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($resPassenger['ResPassenger']['email']); ?>&nbsp;</td>
		<td><?php echo h($resPassenger['ResPassenger']['date_of_birth']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $resPassenger['ResPassenger']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resPassenger['ResPassenger']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resPassenger['ResPassenger']['id']), null, __('Are you sure you want to delete # %s?', $resPassenger['ResPassenger']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Res Passenger'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>
