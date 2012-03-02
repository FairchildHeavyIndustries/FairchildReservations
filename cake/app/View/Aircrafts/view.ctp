<div class="aircrafts view">
<h2><?php  echo __('Aircraft');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($aircraft['Aircraft']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($aircraft['Aircraft']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Aircraft'), array('action' => 'edit', $aircraft['Aircraft']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Aircraft'), array('action' => 'delete', $aircraft['Aircraft']['id']), null, __('Are you sure you want to delete # %s?', $aircraft['Aircraft']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Aircrafts'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aircraft'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flights'), array('controller' => 'flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight'), array('controller' => 'flights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cabins'), array('controller' => 'cabins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cabin'), array('controller' => 'cabins', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Flights');?></h3>
	<?php if (!empty($aircraft['Flight'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Carrier Id'); ?></th>
		<th><?php echo __('Aircraft Id'); ?></th>
		<th><?php echo __('Number'); ?></th>
		<th><?php echo __('Departure Airport'); ?></th>
		<th><?php echo __('Arrival Airport'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th><?php echo __('Monday'); ?></th>
		<th><?php echo __('Tuesday'); ?></th>
		<th><?php echo __('Wednesday'); ?></th>
		<th><?php echo __('Thursday'); ?></th>
		<th><?php echo __('Friday'); ?></th>
		<th><?php echo __('Saturday'); ?></th>
		<th><?php echo __('Sunday'); ?></th>
		<th><?php echo __('Departure Time'); ?></th>
		<th><?php echo __('Arrival Time'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aircraft['Flight'] as $flight): ?>
		<tr>
			<td><?php echo $flight['id'];?></td>
			<td><?php echo $flight['carrier_id'];?></td>
			<td><?php echo $flight['aircraft_id'];?></td>
			<td><?php echo $flight['number'];?></td>
			<td><?php echo $flight['departure_airport'];?></td>
			<td><?php echo $flight['arrival_airport'];?></td>
			<td><?php echo $flight['start'];?></td>
			<td><?php echo $flight['end'];?></td>
			<td><?php echo $flight['monday'];?></td>
			<td><?php echo $flight['tuesday'];?></td>
			<td><?php echo $flight['wednesday'];?></td>
			<td><?php echo $flight['thursday'];?></td>
			<td><?php echo $flight['friday'];?></td>
			<td><?php echo $flight['saturday'];?></td>
			<td><?php echo $flight['sunday'];?></td>
			<td><?php echo $flight['departure_time'];?></td>
			<td><?php echo $flight['arrival_time'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'flights', 'action' => 'view', $flight['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'flights', 'action' => 'edit', $flight['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'flights', 'action' => 'delete', $flight['id']), null, __('Are you sure you want to delete # %s?', $flight['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Flight'), array('controller' => 'flights', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Cabins');?></h3>
	<?php if (!empty($aircraft['Cabin'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('No Of Seat'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($aircraft['Cabin'] as $cabin): ?>
		<tr>
			<td><?php echo $cabin['id'];?></td>
			<td><?php echo $cabin['name'];?></td>
			<td><?php echo $cabin['no_of_seat'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cabins', 'action' => 'view', $cabin['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cabins', 'action' => 'edit', $cabin['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cabins', 'action' => 'delete', $cabin['id']), null, __('Are you sure you want to delete # %s?', $cabin['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cabin'), array('controller' => 'cabins', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
