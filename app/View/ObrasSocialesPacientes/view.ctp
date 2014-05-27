<div class="obrasSocialesPacientes view">
<h2><?php echo __('Obras Sociales Paciente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($obrasSocialesPaciente['ObrasSocialesPaciente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pacientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($obrasSocialesPaciente['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $obrasSocialesPaciente['Pacientes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obras Sociales'); ?></dt>
		<dd>
			<?php echo $this->Html->link($obrasSocialesPaciente['ObrasSociales']['id'], array('controller' => 'obras_sociales', 'action' => 'view', $obrasSocialesPaciente['ObrasSociales']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($obrasSocialesPaciente['ObrasSocialesPaciente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($obrasSocialesPaciente['ObrasSocialesPaciente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Obras Sociales Paciente'), array('action' => 'edit', $obrasSocialesPaciente['ObrasSocialesPaciente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Obras Sociales Paciente'), array('action' => 'delete', $obrasSocialesPaciente['ObrasSocialesPaciente']['id']), null, __('Are you sure you want to delete # %s?', $obrasSocialesPaciente['ObrasSocialesPaciente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras Sociales Pacientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociales Paciente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
	</ul>
</div>
