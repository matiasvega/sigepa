<div class="profesionales form">
<?php echo $this->Form->create('Profesionale'); ?>
	<fieldset>
		<legend><?php echo __('Edit Profesionale'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('matricula');
		echo $this->Form->input('fechaNacimiento');
		echo $this->Form->input('Especialidade');
		echo $this->Form->input('ObrasSociale');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Profesionale.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Profesionale.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociale'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
	</ul>
</div>
