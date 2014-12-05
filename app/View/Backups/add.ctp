<div class="backups form">
<?php echo $this->Form->create('Backup'); ?>
	<fieldset>
		<legend><?php echo __('Add Backup'); ?></legend>
	<?php
		echo $this->Form->input('tag');
		echo $this->Form->input('fecha');
		echo $this->Form->input('filename');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Backups'), array('action' => 'index')); ?></li>
	</ul>
</div>
