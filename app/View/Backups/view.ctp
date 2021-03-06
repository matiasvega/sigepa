<div class="backups view">
<h2><?php echo __('Backup'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($backup['Backup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo h($backup['Backup']['tag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($backup['Backup']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Filename'); ?></dt>
		<dd>
			<?php echo h($backup['Backup']['filename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($backup['Backup']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($backup['Backup']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Backup'), array('action' => 'edit', $backup['Backup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Backup'), array('action' => 'delete', $backup['Backup']['id']), null, __('Are you sure you want to delete # %s?', $backup['Backup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Backups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Backup'), array('action' => 'add')); ?> </li>
	</ul>
</div>
