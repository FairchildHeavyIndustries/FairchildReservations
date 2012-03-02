<div class="routes index">
	<h2><?php echo __('Routes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('start_airport_id');?></th>
			<th><?php echo $this->Paginator->sort('end_airport_id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($routes as $route): ?>
	<tr>
		<td><?php echo h($route['Route']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($route['StartAirport']['name'], array('controller' => 'airports', 'action' => 'view', $route['StartAirport']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($route['EndAirport']['name'], array('controller' => 'airports', 'action' => 'view', $route['EndAirport']['id'])); ?>
		</td>
		<td><?php echo h($route['Route']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $route['Route']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $route['Route']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $route['Route']['id']), null, __('Are you sure you want to delete # %s?', $route['Route']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Route'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Airports'), array('controller' => 'airports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Start Airport'), array('controller' => 'airports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fares'), array('controller' => 'fares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fare'), array('controller' => 'fares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flights'), array('controller' => 'flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight'), array('controller' => 'flights', 'action' => 'add')); ?> </li>
	</ul>
</div>
