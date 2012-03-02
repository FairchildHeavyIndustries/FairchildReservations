<div class="cabins index">
	<h2><?php echo __('Cabins');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('no_of_seat');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($cabins as $cabin): ?>
	<tr>
		<td><?php echo h($cabin['Cabin']['id']); ?>&nbsp;</td>
		<td><?php echo h($cabin['Cabin']['name']); ?>&nbsp;</td>
		<td><?php echo h($cabin['Cabin']['no_of_seat']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cabin['Cabin']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cabin['Cabin']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cabin['Cabin']['id']), null, __('Are you sure you want to delete # %s?', $cabin['Cabin']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cabin'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Fares'), array('controller' => 'fares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fare'), array('controller' => 'fares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservation Flights'), array('controller' => 'reservation_flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation Flight'), array('controller' => 'reservation_flights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aircrafts'), array('controller' => 'aircrafts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aircraft'), array('controller' => 'aircrafts', 'action' => 'add')); ?> </li>
	</ul>
</div>
