<div class="turnos form">
<?php echo $this->Form->create('Turno'); ?>
	<fieldset>
		<legend><?php echo __('Edit Turno'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fechaHora');
		echo $this->Form->input('pacientes_id');
		echo $this->Form->input('profesionales_id');
		echo $this->Form->input('especialidades_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Turno.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Turno.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Turnos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesionales'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidades'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
