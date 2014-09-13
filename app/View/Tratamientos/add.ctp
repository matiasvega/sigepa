<div class="tratamientos form">
<?php echo $this->Form->create('Tratamiento'); ?>
	<fieldset>
		<legend><?php echo __('Add Tratamiento'); ?></legend>
	<?php
		echo $this->Form->input('fechaInicio');
		echo $this->Form->input('fechaFin');
		echo $this->Form->input('Medicacione');
		echo $this->Form->input('Patologia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tratamientos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Medicaciones'), array('controller' => 'medicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicacione'), array('controller' => 'medicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologia'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
	</ul>
</div>
