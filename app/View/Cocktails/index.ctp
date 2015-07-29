<div class="cocktails index">
	<h2><?php echo __('Cocktails'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('initials'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('bank_name'); ?></th>
			<th><?php echo $this->Paginator->sort('attending_cocktail'); ?></th>
			<th><?php echo $this->Paginator->sort('dietary_restrictions'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cocktails as $cocktail): ?>
	<tr>
		<td><?php echo h($cocktail['Cocktail']['id']); ?>&nbsp;</td>
		<td><?php echo h($cocktail['Cocktail']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($cocktail['Cocktail']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($cocktail['Cocktail']['initials']); ?>&nbsp;</td>
		<td><?php echo h($cocktail['Cocktail']['email']); ?>&nbsp;</td>
		<td><?php echo h($cocktail['Cocktail']['phone']); ?>&nbsp;</td>
		<td><?php echo h($cocktail['Cocktail']['city']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cocktail['Country']['name'], array('controller' => 'countries', 'action' => 'view', $cocktail['Country']['id'])); ?>
		</td>
		<td><?php echo h($cocktail['Cocktail']['bank_name']); ?>&nbsp;</td>
		<td><?php echo h($cocktail['Cocktail']['attending_cocktail']); ?>&nbsp;</td>
		<td><?php echo h($cocktail['Cocktail']['dietary_restrictions']); ?>&nbsp;</td>
		<td><?php echo h($cocktail['Cocktail']['created']); ?>&nbsp;</td>
		<td><?php echo h($cocktail['Cocktail']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cocktail['Cocktail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cocktail['Cocktail']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cocktail['Cocktail']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $cocktail['Cocktail']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
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
		<li><?php echo $this->Html->link(__('New Cocktail'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
