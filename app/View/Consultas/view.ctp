<div class="consultas view">
<h2><?php echo __('Consulta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diagnostico'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['diagnostico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pacientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consulta['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $consulta['Pacientes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consulta'), array('action' => 'edit', $consulta['Consulta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consulta'), array('action' => 'delete', $consulta['Consulta']['id']), null, __('Are you sure you want to delete # %s?', $consulta['Consulta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
