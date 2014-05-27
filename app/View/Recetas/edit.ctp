<div class="recetas form">
<?php echo $this->Form->create('Receta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Receta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pacientes_id');
		echo $this->Form->input('medicamentos_id');
		echo $this->Form->input('observaciones');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Receta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Receta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recetas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Medicamentos'), array('controller' => 'medicamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicamentos'), array('controller' => 'medicamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
