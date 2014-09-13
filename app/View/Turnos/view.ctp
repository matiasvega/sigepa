<div class="turnos view">
<h2><?php echo __('Turno'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($turno['Turno']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaHora'); ?></dt>
		<dd>
			<?php echo h($turno['Turno']['fechaHora']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pacientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($turno['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $turno['Pacientes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesionales'); ?></dt>
		<dd>
			<?php echo $this->Html->link($turno['Profesionales']['id'], array('controller' => 'profesionales', 'action' => 'view', $turno['Profesionales']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especialidades'); ?></dt>
		<dd>
			<?php echo $this->Html->link($turno['Especialidades']['id'], array('controller' => 'especialidades', 'action' => 'view', $turno['Especialidades']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($turno['Turno']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($turno['Turno']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Turno'), array('action' => 'edit', $turno['Turno']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Turno'), array('action' => 'delete', $turno['Turno']['id']), null, __('Are you sure you want to delete # %s?', $turno['Turno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Turnos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turno'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesionales'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidades'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
