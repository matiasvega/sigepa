<div class="medicaciones form">
<?php echo $this->Form->create('Medicacione'); ?>
	<fieldset>
		<legend><?php echo __('Edit Medicacione'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('cantidad');
		echo $this->Form->input('tratamientos_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Medicacione.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Medicacione.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Medicaciones'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamientos'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
