<div class="antecedentes form">
<?php echo $this->Form->create('Antecedente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Antecedente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('atiopia');
		echo $this->Form->input('habitos');
		echo $this->Form->input('medicacion_base');
		echo $this->Form->input('familiares');
		echo $this->Form->input('otros');
		echo $this->Form->input('pacientes_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Antecedente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Antecedente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Antecedentes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
