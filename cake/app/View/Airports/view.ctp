<div class="airports view">
<h2><?php  echo __('Airport');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($airport['Airport']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($airport['Airport']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo $this->Html->link($airport['City']['name'], array('controller' => 'cities', 'action' => 'view', $airport['City']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Airport'), array('action' => 'edit', $airport['Airport']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Airport'), array('action' => 'delete', $airport['Airport']['id']), null, __('Are you sure you want to delete # %s?', $airport['Airport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Airports'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Airport'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div>
