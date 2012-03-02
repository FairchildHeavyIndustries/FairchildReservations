<div class="resFlights view">
<h2><?php  echo __('Res Flight');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resFlight['ResFlight']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reservation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resFlight['Reservation']['pnr'], array('controller' => 'reservations', 'action' => 'view', $resFlight['Reservation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Flight'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resFlight['Flight']['number'], array('controller' => 'flights', 'action' => 'view', $resFlight['Flight']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cabin'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resFlight['Cabin']['name'], array('controller' => 'cabins', 'action' => 'view', $resFlight['Cabin']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($resFlight['ResFlight']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($resFlight['ResFlight']['is_active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Res Flight'), array('action' => 'edit', $resFlight['ResFlight']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Res Flight'), array('action' => 'delete', $resFlight['ResFlight']['id']), null, __('Are you sure you want to delete # %s?', $resFlight['ResFlight']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Flights'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Flight'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Flights'), array('controller' => 'flights', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Flight'), array('controller' => 'flights', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cabins'), array('controller' => 'cabins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cabin'), array('controller' => 'cabins', 'action' => 'add')); ?> </li>
	</ul>
</div>
