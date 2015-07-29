<div class="appointments view">
<h2><?php echo __('Appointment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Initials'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['initials']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointment['Country']['name'], array('controller' => 'countries', 'action' => 'view', $appointment['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Name'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['bank_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guest 1'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['guest_1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guest 2'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['guest_2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guest 3'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['guest_3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Team'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointment['Team']['title'], array('controller' => 'teams', 'action' => 'view', $appointment['Team']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Person'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointment['Person']['title'], array('controller' => 'people', 'action' => 'view', $appointment['Person']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Topic'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointment['Topic']['title'], array('controller' => 'topics', 'action' => 'view', $appointment['Topic']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Other Topic'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['other_topic']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointment['Date']['date'], array('controller' => 'dates', 'action' => 'view', $appointment['Date']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointment['Time']['title'], array('controller' => 'times', 'action' => 'view', $appointment['Time']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alternate Date'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointment['AlternateDate']['date'], array('controller' => 'dates', 'action' => 'view', $appointment['AlternateDate']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alternate Time'); ?></dt>
		<dd>
			<?php echo $this->Html->link($appointment['AlternateTime']['title'], array('controller' => 'times', 'action' => 'view', $appointment['AlternateTime']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($appointment['Appointment']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Appointment'), array('action' => 'edit', $appointment['Appointment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Appointment'), array('action' => 'delete', $appointment['Appointment']['id']), array(), __('Are you sure you want to delete # %s?', $appointment['Appointment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Appointments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Appointment'), array('action' => 'add')); ?> </li>
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
