<div class="airports view">
<h2><?php  __('Airport');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $airport['Airport']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $airport['Airport']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($airport['City']['name'], array('controller' => 'cities', 'action' => 'view', $airport['City']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Airport', true), array('action' => 'edit', $airport['Airport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Airport', true), array('action' => 'delete', $airport['Airport']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $airport['Airport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Airports', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Airport', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities', true), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City', true), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div>
