<div class="pacientesPatologias view">
<h2><?php echo __('Pacientes Patologia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($pacientesPatologia['PacientesPatologia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patologias'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pacientesPatologia['Patologias']['id'], array('controller' => 'patologias', 'action' => 'view', $pacientesPatologia['Patologias']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pacientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pacientesPatologia['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $pacientesPatologia['Pacientes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tratamientos'); ?></dt>
		<dd>
			<?php echo $this->Html->link($pacientesPatologia['Tratamientos']['id'], array('controller' => 'tratamientos', 'action' => 'view', $pacientesPatologia['Tratamientos']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($pacientesPatologia['PacientesPatologia']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __(' Modified'); ?></dt>
		<dd>
			<?php echo h($pacientesPatologia['PacientesPatologia'][' modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Pacientes Patologia'), array('action' => 'edit', $pacientesPatologia['PacientesPatologia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Pacientes Patologia'), array('action' => 'delete', $pacientesPatologia['PacientesPatologia']['id']), null, __('Are you sure you want to delete # %s?', $pacientesPatologia['PacientesPatologia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes Patologias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes Patologia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologias'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamientos'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
