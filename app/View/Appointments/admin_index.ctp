<div class="appointments index">
	<h2><?php echo __('Appointments'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('guest_1'); ?></th>
			<th><?php echo $this->Paginator->sort('guest_2'); ?></th>
			<th><?php echo $this->Paginator->sort('guest_3'); ?></th>
			<th><?php echo $this->Paginator->sort('team_id'); ?></th>
			<th><?php echo $this->Paginator->sort('person_id'); ?></th>
			<th><?php echo $this->Paginator->sort('topic_id'); ?></th>
			<th><?php echo $this->Paginator->sort('other_topic'); ?></th>
			<th><?php echo $this->Paginator->sort('date_id'); ?></th>
			<th><?php echo $this->Paginator->sort('time_id'); ?></th>
			<th><?php echo $this->Paginator->sort('alternate_date'); ?></th>
			<th><?php echo $this->Paginator->sort('alternate_time'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('updated'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($appointments as $appointment): ?>
	<tr>
		<td><?php echo h($appointment['Appointment']['id']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['initials']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['email']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['phone']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['city']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($appointment['Country']['name'], array('controller' => 'countries', 'action' => 'view', $appointment['Country']['id'])); ?>
		</td>
		<td><?php echo h($appointment['Appointment']['bank_name']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['guest_1']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['guest_2']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['guest_3']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($appointment['Team']['title'], array('controller' => 'teams', 'action' => 'view', $appointment['Team']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($appointment['Person']['title'], array('controller' => 'people', 'action' => 'view', $appointment['Person']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($appointment['Topic']['title'], array('controller' => 'topics', 'action' => 'view', $appointment['Topic']['id'])); ?>
		</td>
		<td><?php echo h($appointment['Appointment']['other_topic']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($appointment['Date']['date'], array('controller' => 'dates', 'action' => 'view', $appointment['Date']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($appointment['Time']['title'], array('controller' => 'times', 'action' => 'view', $appointment['Time']['id'])); ?>
		</td>
		<td><?php echo h($appointment['Appointment']['alternate_date']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['alternate_time']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['created']); ?>&nbsp;</td>
		<td><?php echo h($appointment['Appointment']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $appointment['Appointment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $appointment['Appointment']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $appointment['Appointment']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Appointment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Teams'), array('controller' => 'teams', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Team'), array('controller' => 'teams', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People'), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person'), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Topics'), array('controller' => 'topics', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Topic'), array('controller' => 'topics', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dates'), array('controller' => 'dates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Date'), array('controller' => 'dates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Times'), array('controller' => 'times', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Time'), array('controller' => 'times', 'action' => 'add')); ?> </li>
	</ul>
</div>
