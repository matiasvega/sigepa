<div class="obrasSocialesProfesionales form">
<?php echo $this->Form->create('ObrasSocialesProfesionale'); ?>
	<fieldset>
		<legend><?php echo __('Edit Obras Sociales Profesionale'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('obras_sociales_id');
		echo $this->Form->input('profesionales_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ObrasSocialesProfesionale.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ObrasSocialesProfesionale.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Obras Sociales Profesionales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesionales'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
	</ul>
</div>
