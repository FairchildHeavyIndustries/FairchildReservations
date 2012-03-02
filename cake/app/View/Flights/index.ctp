<div class="flights index">
	<h2><?php echo __('Flights');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('carrier_id');?></th>
			<th><?php echo $this->Paginator->sort('aircraft_id');?></th>
			<th><?php echo $this->Paginator->sort('number');?></th>
			<th><?php echo $this->Paginator->sort('departure_airport');?></th>
			<th><?php echo $this->Paginator->sort('arrival_airport');?></th>
			<th><?php echo $this->Paginator->sort('start');?></th>
			<th><?php echo $this->Paginator->sort('end');?></th>
			<th><?php echo $this->Paginator->sort('monday');?></th>
			<th><?php echo $this->Paginator->sort('tuesday');?></th>
			<th><?php echo $this->Paginator->sort('wednesday');?></th>
			<th><?php echo $this->Paginator->sort('thursday');?></th>
			<th><?php echo $this->Paginator->sort('friday');?></th>
			<th><?php echo $this->Paginator->sort('saturday');?></th>
			<th><?php echo $this->Paginator->sort('sunday');?></th>
			<th><?php echo $this->Paginator->sort('departure_time');?></th>
			<th><?php echo $this->Paginator->sort('arrival_time');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($flights as $flight): ?>
	<tr>
		<td><?php echo h($flight['Flight']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($flight['Carrier']['name'], array('controller' => 'carriers', 'action' => 'view', $flight['Carrier']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($flight['Aircraft']['name'], array('controller' => 'aircrafts', 'action' => 'view', $flight['Aircraft']['id'])); ?>
		</td>
		<td><?php echo h($flight['Flight']['number']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['departure_airport']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['arrival_airport']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['start']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['end']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['monday']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['tuesday']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['wednesday']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['thursday']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['friday']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['saturday']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['sunday']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['departure_time']); ?>&nbsp;</td>
		<td><?php echo h($flight['Flight']['arrival_time']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $flight['Flight']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $flight['Flight']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $flight['Flight']['id']), null, __('Are you sure you want to delete # %s?', $flight['Flight']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Flight'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carriers'), array('controller' => 'carriers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrier'), array('controller' => 'carriers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aircrafts'), array('controller' => 'aircrafts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aircraft'), array('controller' => 'aircrafts', 'action' => 'add')); ?> </li>
	</ul>
</div>

