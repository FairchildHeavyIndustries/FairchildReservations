<div class="routes view">
<h2><?php  echo __('Route');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($route['Route']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Airport'); ?></dt>
		<dd>
			<?php echo $this->Html->link($route['StartAirport']['name'], array('controller' => 'airports', 'action' => 'view', $route['StartAirport']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Airport'); ?></dt>
		<dd>
			<?php echo $this->Html->link($route['EndAirport']['name'], array('controller' => 'airports', 'action' => 'view', $route['EndAirport']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($route['Route']['description']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Route'), array('action' => 'edit', $route['Route']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Route'), array('action' => 'delete', $route['Route']['id']), null, __('Are you sure you want to delete # %s?', $route['Route']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Routes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Route'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Airports'), array('controller' => 'airports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Start Airport'), array('controller' => 'airports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fares'), array('controller' => 'fares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fare'), array('controller' => 'fares', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flights'), array('controller' => 'flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight'), array('controller' => 'flights', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Fares');?></h3>
	<?php if (!empty($route['Fare'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Route Id'); ?></th>
		<th><?php echo __('Currency'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Cabin Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($route['Fare'] as $fare): ?>
		<tr>
			<td><?php echo $fare['id'];?></td>
			<td><?php echo $fare['route_id'];?></td>
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
	<h3><?php echo __('Related Flights');?></h3>
	<?php if (!empty($route['Flight'])):?>
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
		foreach ($route['Flight'] as $flight): ?>
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
