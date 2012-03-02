<div class="resPassengers view">
<h2><?php  echo __('Res Passenger');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resPassenger['ResPassenger']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reservation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resPassenger['Reservation']['id'], array('controller' => 'reservations', 'action' => 'view', $resPassenger['Reservation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Seqn No'); ?></dt>
		<dd>
			<?php echo h($resPassenger['ResPassenger']['seqn_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($resPassenger['ResPassenger']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($resPassenger['ResPassenger']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($resPassenger['ResPassenger']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($resPassenger['ResPassenger']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($resPassenger['ResPassenger']['date_of_birth']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Res Passenger'), array('action' => 'edit', $resPassenger['ResPassenger']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Res Passenger'), array('action' => 'delete', $resPassenger['ResPassenger']['id']), null, __('Are you sure you want to delete # %s?', $resPassenger['ResPassenger']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Passengers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Passenger'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
	</ul>
</div>
