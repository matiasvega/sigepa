<div class="especialidades form">
<?php echo $this->Form->create('Especialidade'); ?>
	<fieldset>
		<legend><?php echo __('Edit Especialidade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Especialidade.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Especialidade.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('action' => 'index')); ?></li>
	</ul>
</div>