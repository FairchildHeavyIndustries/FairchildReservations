<div class="fees index">
	<h2><?php echo __('Fees');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('start_airport');?></th>
			<th><?php echo $this->Paginator->sort('end_airport');?></th>
			<th><?php echo $this->Paginator->sort('currency');?></th>
			<th><?php echo $this->Paginator->sort('is_active');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($fees as $fee): ?>
	<tr>
		<td><?php echo h($fee['Fee']['id']); ?>&nbsp;</td>
		<td><?php echo h($fee['Fee']['start_airport']); ?>&nbsp;</td>
		<td><?php echo h($fee['Fee']['end_airport']); ?>&nbsp;</td>
		<td><?php echo h($fee['Fee']['currency']); ?>&nbsp;</td>
		<td><?php echo h($fee['Fee']['is_active']); ?>&nbsp;</td>
		<td><?php echo h($fee['Fee']['amount']); ?>&nbsp;</td>
		<td><?php echo h($fee['Fee']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $fee['Fee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $fee['Fee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $fee['Fee']['id']), null, __('Are you sure you want to delete # %s?', $fee['Fee']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Fee'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>
