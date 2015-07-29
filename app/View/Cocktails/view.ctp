<div class="cocktails view">
<h2><?php echo __('Cocktail'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Initials'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['initials']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cocktail['Country']['name'], array('controller' => 'countries', 'action' => 'view', $cocktail['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bank Name'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['bank_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attending Cocktail'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['attending_cocktail']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dietary Restrictions'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['dietary_restrictions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Updated'); ?></dt>
		<dd>
			<?php echo h($cocktail['Cocktail']['updated']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cocktail'), array('action' => 'edit', $cocktail['Cocktail']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cocktail'), array('action' => 'delete', $cocktail['Cocktail']['id']), array(), __('Are you sure you want to delete # %s?', $cocktail['Cocktail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cocktails'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cocktail'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
	</ul>
</div>
