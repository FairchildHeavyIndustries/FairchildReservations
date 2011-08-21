<div class="flights index">
	<h2><?php __('Flights');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('carrier_id');?></th>
			<th><?php echo $this->Paginator->sort('aircraft_id');?></th>
			<th><?php echo $this->Paginator->sort('number');?></th>
			<th><?php echo $this->Paginator->sort('departure_airport');?></th>
			<th><?php echo $this->Paginator->sort('arrival_airport');?></th>
			<th><?php echo $this->Paginator->sort('start');?></th>
			<th><?php echo $this->Paginator->sort('end');?></th>
			<th><?php echo $this->Paginator->sort('monday');?></th>
			<th><?php echo $this->Paginator->sort('tuesday');?></th>
			<th><?php echo $this->Paginator->sort('wednesday');?></th>
			<th><?php echo $this->Paginator->sort('thursday');?></th>
			<th><?php echo $this->Paginator->sort('friday');?></th>
			<th><?php echo $this->Paginator->sort('saturday');?></th>
			<th><?php echo $this->Paginator->sort('sunday');?></th>
			<th><?php echo $this->Paginator->sort('departure_time');?></th>
			<th><?php echo $this->Paginator->sort('arrival_time');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($flights as $flight):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $flight['Flight']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($flight['Carrier']['name'], array('controller' => 'carriers', 'action' => 'view', $flight['Carrier']['id'])); ?>
		</td>
		<td><?php echo $flight['Flight']['aircraft_id']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['number']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['departure_airport']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['arrival_airport']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['start']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['end']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['monday']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['tuesday']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['wednesday']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['thursday']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['friday']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['saturday']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['sunday']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['departure_time']; ?>&nbsp;</td>
		<td><?php echo $flight['Flight']['arrival_time']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $flight['Flight']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $flight['Flight']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $flight['Flight']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $flight['Flight']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Flight', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Carriers', true), array('controller' => 'carriers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Carrier', true), array('controller' => 'carriers', 'action' => 'add')); ?> </li>
	</ul>
</div>