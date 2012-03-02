<div class="fares view">
<h2><?php  echo __('Fare');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Route Id'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['route_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cabin'); ?></dt>
		<dd>
			<?php echo $this->Html->link($fare['Cabin']['name'], array('controller' => 'cabins', 'action' => 'view', $fare['Cabin']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['currency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($fare['Fare']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fare'), array('action' => 'edit', $fare['Fare']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fare'), array('action' => 'delete', $fare['Fare']['id']), null, __('Are you sure you want to delete # %s?', $fare['Fare']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fares'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fare'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cabins'), array('controller' => 'cabins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cabin'), array('controller' => 'cabins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flights'), array('controller' => 'flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight'), array('controller' => 'flights', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Flights');?></h3>
	<?php if (!empty($fare['Flight'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Carrier Id'); ?></th>
		<th><?php echo __('Aircraft Id'); ?></th>
		<th><?php echo __('Route Id'); ?></th>
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
		foreach ($fare['Flight'] as $flight): ?>
		<tr>
			<td><?php echo $flight['id'];?></td>
			<td><?php echo $flight['carrier_id'];?></td>
			<td><?php echo $flight['aircraft_id'];?></td>
			<td><?php echo $flight['route_id'];?></td>
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
