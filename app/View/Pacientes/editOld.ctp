<div class="pacientes form">
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Paciente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('dni');
		echo $this->Form->input('nombre');
		echo $this->Form->input('apellido');
		echo $this->Form->input('sexo');
		echo $this->Form->input('fechaNacimiento');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefonoFijo');
		echo $this->Form->input('telefonoMovil');
		echo $this->Form->input('fechaUltimaConsulta');
		echo $this->Form->input('EstudiosComplementario');
		echo $this->Form->input('ObrasSociale');
		echo $this->Form->input('Patologia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Paciente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Paciente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudios Complementario'), array('controller' => 'estudios_complementarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociale'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologia'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
	</ul>
</div>
