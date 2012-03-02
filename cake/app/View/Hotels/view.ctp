<div class="hotels view">
<h2><?php  echo __('Hotel');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hotel Name'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['hotel_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($hotel['City']['name'], array('controller' => 'cities', 'action' => 'view', $hotel['City']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image Name'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['image_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rating'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['rating']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nightly Rate'); ?></dt>
		<dd>
			<?php echo h($hotel['Hotel']['nightly_rate']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Hotel'), array('action' => 'edit', $hotel['Hotel']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Hotel'), array('action' => 'delete', $hotel['Hotel']['id']), null, __('Are you sure you want to delete # %s?', $hotel['Hotel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Reservations');?></h3>
	<?php if (!empty($hotel['Reservation'])):?>
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
		foreach ($hotel['Reservation'] as $reservation): ?>
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
