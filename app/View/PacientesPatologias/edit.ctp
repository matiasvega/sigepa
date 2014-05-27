<div class="pacientesPatologias form">
<?php echo $this->Form->create('PacientesPatologia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Pacientes Patologia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('patologias_id');
		echo $this->Form->input('pacientes_id');
		echo $this->Form->input('tratamientos_id');
		echo $this->Form->input(' modified');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PacientesPatologia.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PacientesPatologia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes Patologias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologias'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamientos'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
