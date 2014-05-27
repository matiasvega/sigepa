<div class="estudiosComplementariosPacientes view">
<h2><?php echo __('Estudios Complementarios Paciente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pacientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estudiosComplementariosPaciente['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $estudiosComplementariosPaciente['Pacientes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estudios Complementarios'); ?></dt>
		<dd>
			<?php echo $this->Html->link($estudiosComplementariosPaciente['EstudiosComplementarios']['id'], array('controller' => 'estudios_complementarios', 'action' => 'view', $estudiosComplementariosPaciente['EstudiosComplementarios']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estudios Complementarios Paciente'), array('action' => 'edit', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Estudios Complementarios Paciente'), array('action' => 'delete', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id']), null, __('Are you sure you want to delete # %s?', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudios Complementarios Pacientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudios Complementarios Paciente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
