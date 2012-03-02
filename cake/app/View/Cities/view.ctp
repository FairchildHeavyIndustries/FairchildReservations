<div class="cities view">
<h2><?php  echo __('City');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($city['City']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($city['City']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo h($city['City']['currency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position X'); ?></dt>
		<dd>
			<?php echo h($city['City']['position_x']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position Y'); ?></dt>
		<dd>
			<?php echo h($city['City']['position_y']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('GMT Offset'); ?></dt>
		<dd>
			<?php echo h($city['City']['gMT_offset']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DST Start'); ?></dt>
		<dd>
			<?php echo h($city['City']['dST_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DST End'); ?></dt>
		<dd>
			<?php echo h($city['City']['dST_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('DST Offset'); ?></dt>
		<dd>
			<?php echo h($city['City']['dST_offset']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Active'); ?></dt>
		<dd>
			<?php echo h($city['City']['is_active']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit City'), array('action' => 'edit', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete City'), array('action' => 'delete', $city['City']['id']), null, __('Are you sure you want to delete # %s?', $city['City']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Airports'), array('controller' => 'airports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Airport'), array('controller' => 'airports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Airports');?></h3>
	<?php if (!empty($city['Airport'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($city['Airport'] as $airport): ?>
		<tr>
			<td><?php echo $airport['id'];?></td>
			<td><?php echo $airport['name'];?></td>
			<td><?php echo $airport['city_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'airports', 'action' => 'view', $airport['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'airports', 'action' => 'edit', $airport['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'airports', 'action' => 'delete', $airport['id']), null, __('Are you sure you want to delete # %s?', $airport['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Airport'), array('controller' => 'airports', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Hotels');?></h3>
	<?php if (!empty($city['Hotel'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Hotel Name'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Image Name'); ?></th>
		<th><?php echo __('Rating'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Nightly Rate'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($city['Hotel'] as $hotel): ?>
		<tr>
			<td><?php echo $hotel['id'];?></td>
			<td><?php echo $hotel['hotel_name'];?></td>
			<td><?php echo $hotel['city_id'];?></td>
			<td><?php echo $hotel['image_name'];?></td>
			<td><?php echo $hotel['rating'];?></td>
			<td><?php echo $hotel['description'];?></td>
			<td><?php echo $hotel['nightly_rate'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'hotels', 'action' => 'view', $hotel['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'hotels', 'action' => 'edit', $hotel['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'hotels', 'action' => 'delete', $hotel['id']), null, __('Are you sure you want to delete # %s?', $hotel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
