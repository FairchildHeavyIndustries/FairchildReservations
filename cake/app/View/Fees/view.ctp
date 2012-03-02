<div class="fees view">
<h2><?php  echo __('Fee');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Airport'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['start_airport']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Airport'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['end_airport']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['currency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['is_active']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($fee['Fee']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Fee'), array('action' => 'edit', $fee['Fee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Fee'), array('action' => 'delete', $fee['Fee']['id']), null, __('Are you sure you want to delete # %s?', $fee['Fee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Fees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fee'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reservations');?></h3>
	<?php if (!empty($fee['Reservation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Pnr'); ?></th>
		<th><?php echo __('Is Active'); ?></th>
		<th><?php echo __('Created Date'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($fee['Reservation'] as $reservation): ?>
		<tr>
			<td><?php echo $reservation['id'];?></td>
			<td><?php echo $reservation['pnr'];?></td>
			<td><?php echo $reservation['is_active'];?></td>
			<td><?php echo $reservation['created_date'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reservations', 'action' => 'view', $reservation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reservations', 'action' => 'edit', $reservation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reservations', 'action' => 'delete', $reservation['id']), null, __('Are you sure you want to delete # %s?', $reservation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
