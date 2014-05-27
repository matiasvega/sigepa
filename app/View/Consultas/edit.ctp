<div class="consultas form">
<?php echo $this->Form->create('Consulta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Consulta'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Consulta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Consulta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
