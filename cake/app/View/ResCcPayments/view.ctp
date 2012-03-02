<div class="resCcPayments view">
<h2><?php  echo __('Res Cc Payment');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($resCcPayment['ResCcPayment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reservation'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resCcPayment['Reservation']['id'], array('controller' => 'reservations', 'action' => 'view', $resCcPayment['Reservation']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Card Issuer'); ?></dt>
		<dd>
			<?php echo $this->Html->link($resCcPayment['CardIssuer']['name'], array('controller' => 'card_issuers', 'action' => 'view', $resCcPayment['CardIssuer']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cc Number'); ?></dt>
		<dd>
			<?php echo h($resCcPayment['ResCcPayment']['cc_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($resCcPayment['ResCcPayment']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo h($resCcPayment['ResCcPayment']['currency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expiration'); ?></dt>
		<dd>
			<?php echo h($resCcPayment['ResCcPayment']['expiration']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cvv'); ?></dt>
		<dd>
			<?php echo h($resCcPayment['ResCcPayment']['cvv']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Res Cc Payment'), array('action' => 'edit', $resCcPayment['ResCcPayment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Res Cc Payment'), array('action' => 'delete', $resCcPayment['ResCcPayment']['id']), null, __('Are you sure you want to delete # %s?', $resCcPayment['ResCcPayment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Res Cc Payments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Res Cc Payment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Reservations'), array('controller' => 'reservations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reservation'), array('controller' => 'reservations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Card Issuers'), array('controller' => 'card_issuers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Card Issuer'), array('controller' => 'card_issuers', 'action' => 'add')); ?> </li>
	</ul>
</div>
