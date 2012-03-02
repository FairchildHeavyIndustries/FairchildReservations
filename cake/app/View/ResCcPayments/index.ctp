<div class="resCcPayments index">
	<h2><?php echo __('Res Cc Payments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('reservation_id');?></th>
			<th><?php echo $this->Paginator->sort('card_issuer_id');?></th>
			<th><?php echo $this->Paginator->sort('cc_number');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('currency');?></th>
			<th><?php echo $this->Paginator->sort('expiration');?></th>
			<th><?php echo $this->Paginator->sort('cvv');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($resCcPayments as $resCcPayment): ?>
	<tr>
		<td><?php echo h($resCcPayment['ResCcPayment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resCcPayment['Reservation']['id'], array('controller' => 'reservations', 'action' => 'view', $resCcPayment['Reservation']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($resCcPayment['CardIssuer']['name'], array('controller' => 'card_issuers', 'action' => 'view', $resCcPayment['CardIssuer']['id'])); ?>
		</td>
		<td><?php echo h($resCcPayment['ResCcPayment']['cc_number']); ?>&nbsp;</td>
		<td><?php echo h($resCcPayment['ResCcPayment']['amount']); ?>&nbsp;</td>
		<td><?php echo h($resCcPayment['ResCcPayment']['currency']); ?>&nbsp;</td>
		<td><?php echo h($resCcPayment['ResCcPayment']['expiration']); ?>&nbsp;</td>
		<td><?php echo h($resCcPayment['ResCcPayment']['cvv']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $resCcPayment['ResCcPayment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resCcPayment['ResCcPayment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resCcPayment['ResCcPayment']['id']), null, __('Are you sure you want to delete # %s?', $resCcPayment['ResCcPayment']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Res Cc Payment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Issuers'), array('controller' => 'card_issuers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Issuer'), array('controller' => 'card_issuers', 'action' => 'add')); ?> </li>
	</ul>
</div>
