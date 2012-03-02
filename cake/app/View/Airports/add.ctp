<div class="airports form">
<?php echo $this->Form->create('Airport');?>
	<fieldset>
		<legend><?php echo __('Add Airport'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('city_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Airports'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
	</ul>
</div>
