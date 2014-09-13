<div class="examenesFisicos form">
<?php echo $this->Form->create('ExamenesFisico'); ?>
	<fieldset>
		<legend><?php echo __('Edit Examenes Fisico'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('estatura');
		echo $this->Form->input('peso');
		echo $this->Form->input('piel');
		echo $this->Form->input('mucosas');
		echo $this->Form->input('ap_respiratorio');
		echo $this->Form->input('TA');
		echo $this->Form->input('FC');
		echo $this->Form->input('FR');
		echo $this->Form->input('oximetria_pulso');
		echo $this->Form->input('pacientes_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ExamenesFisico.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ExamenesFisico.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Examenes Fisicos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
