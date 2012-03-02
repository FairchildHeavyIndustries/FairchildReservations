<div class="flights view">
<h2><?php  echo __('Flight');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carrier'); ?></dt>
		<dd>
			<?php echo $this->Html->link($flight['Carrier']['name'], array('controller' => 'carriers', 'action' => 'view', $flight['Carrier']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aircraft'); ?></dt>
		<dd>
			<?php echo $this->Html->link($flight['Aircraft']['name'], array('controller' => 'aircrafts', 'action' => 'view', $flight['Aircraft']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Number'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departure Airport'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['departure_airport']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arrival Airport'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['arrival_airport']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Monday'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['monday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tuesday'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['tuesday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wednesday'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['wednesday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Thursday'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['thursday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Friday'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['friday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saturday'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['saturday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sunday'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['sunday']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departure Time'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['departure_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Arrival Time'); ?></dt>
		<dd>
			<?php echo h($flight['Flight']['arrival_time']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Flight'), array('action' => 'edit', $flight['Flight']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Flight'), array('action' => 'delete', $flight['Flight']['id']), null, __('Are you sure you want to delete # %s?', $flight['Flight']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Flights'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carriers'), array('controller' => 'carriers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrier'), array('controller' => 'carriers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aircrafts'), array('controller' => 'aircrafts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aircraft'), array('controller' => 'aircrafts', 'action' => 'add')); ?> </li>
	</ul>
</div>
