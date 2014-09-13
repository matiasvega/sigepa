<div class="composiciones form">
<?php echo $this->Form->create('Composicione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Composicione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Composicione.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Composicione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Composiciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
