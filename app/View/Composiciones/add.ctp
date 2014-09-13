<div class="composiciones form">
<?php echo $this->Form->create('Composicione'); ?>
	<fieldset>
		<legend><?php echo __('Add Composicione'); ?></legend>
	<?php
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Composiciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
