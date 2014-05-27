<div class="especialidadesProfesionales form">
<?php echo $this->Form->create('EspecialidadesProfesionale'); ?>
	<fieldset>
		<legend><?php echo __('Edit Especialidades Profesionale'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('especialidades_id');
		echo $this->Form->input('profesionales_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EspecialidadesProfesionale.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EspecialidadesProfesionale.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Especialidades Profesionales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidades'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesionales'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
	</ul>
</div>
