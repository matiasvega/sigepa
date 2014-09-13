<div class="patologias form">
<?php echo $this->Form->create('Patologia'); ?>
	<fieldset>
		<legend><?php echo __('Add Patologia'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('Paciente');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Patologias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
