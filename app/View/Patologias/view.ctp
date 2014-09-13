<div class="patologias view">
<h2><?php echo __('Patologia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($patologia['Patologia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($patologia['Patologia']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($patologia['Patologia']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($patologia['Patologia']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($patologia['Patologia']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patologia'), array('action' => 'edit', $patologia['Patologia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Patologia'), array('action' => 'delete', $patologia['Patologia']['id']), null, __('Are you sure you want to delete # %s?', $patologia['Patologia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pacientes'); ?></h3>
	<?php if (!empty($patologia['Paciente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('FechaNacimiento'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('FechaUltimaConsulta'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($patologia['Paciente'] as $paciente): ?>
		<tr>
			<td><?php echo $paciente['id']; ?></td>
			<td><?php echo $paciente['dni']; ?></td>
			<td><?php echo $paciente['nombre']; ?></td>
			<td><?php echo $paciente['apellido']; ?></td>
			<td><?php echo $paciente['sexo']; ?></td>
			<td><?php echo $paciente['fechaNacimiento']; ?></td>
			<td><?php echo $paciente['direccion']; ?></td>
			<td><?php echo $paciente['telefono']; ?></td>
			<td><?php echo $paciente['fechaUltimaConsulta']; ?></td>
			<td><?php echo $paciente['created']; ?></td>
			<td><?php echo $paciente['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pacientes', 'action' => 'view', $paciente['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pacientes', 'action' => 'edit', $paciente['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pacientes', 'action' => 'delete', $paciente['id']), null, __('Are you sure you want to delete # %s?', $paciente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
