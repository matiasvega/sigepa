<div class="consultas form">
<?php echo $this->Form->create('Consulta'); ?>
	<fieldset>
		<legend><?php echo __('Add Consulta'); ?></legend>
	<?php
		echo $this->Form->input('fecha');
		echo $this->Form->input('diagnostico');
		echo $this->Form->input('pacientes_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Consultas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
