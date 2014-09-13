<div class="especialidadesProfesionales form">
<?php echo $this->Form->create('EspecialidadesProfesionale'); ?>
	<fieldset>
		<legend><?php echo __('Add Especialidades Profesionale'); ?></legend>
	<?php
		echo $this->Form->input('especialidades_id');
		echo $this->Form->input('profesionales_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Especialidades Profesionales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidades'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesionales'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
	</ul>
</div>
