<div class="cities form">
<?php echo $this->Form->create('City');?>
	<fieldset>
		<legend><?php echo __('Edit City'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('currency');
		echo $this->Form->input('position_x');
		echo $this->Form->input('position_y');
		echo $this->Form->input('gMT_offset');
		echo $this->Form->input('dST_start');
		echo $this->Form->input('dST_end');
		echo $this->Form->input('dST_offset');
		echo $this->Form->input('is_active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('City.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('City.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cities'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Airports'), array('controller' => 'airports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Airport'), array('controller' => 'airports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Hotels'), array('controller' => 'hotels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Hotel'), array('controller' => 'hotels', 'action' => 'add')); ?> </li>
	</ul>
</div>
