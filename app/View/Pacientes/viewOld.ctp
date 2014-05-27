<div class="pacientes view">
<h2><?php echo __('Paciente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaNacimiento'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['fechaNacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TelefonoFijo'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['telefonoFijo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TelefonoMovil'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['telefonoMovil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaUltimaConsulta'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['fechaUltimaConsulta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Paciente'), array('action' => 'edit', $paciente['Paciente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Paciente'), array('action' => 'delete', $paciente['Paciente']['id']), null, __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudios Complementario'), array('controller' => 'estudios_complementarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociale'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologia'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Estudios Complementarios'); ?></h3>
	<?php if (!empty($paciente['EstudiosComplementario'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Resultado'); ?></th>
		<th><?php echo __('Adjunto'); ?></th>
		<th><?php echo __('FechaSolicitado'); ?></th>
		<th><?php echo __('FechaRealizado'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($paciente['EstudiosComplementario'] as $estudiosComplementario): ?>
		<tr>
			<td><?php echo $estudiosComplementario['id']; ?></td>
			<td><?php echo $estudiosComplementario['nombre']; ?></td>
			<td><?php echo $estudiosComplementario['descripcion']; ?></td>
			<td><?php echo $estudiosComplementario['resultado']; ?></td>
			<td><?php echo $estudiosComplementario['adjunto']; ?></td>
			<td><?php echo $estudiosComplementario['fechaSolicitado']; ?></td>
			<td><?php echo $estudiosComplementario['fechaRealizado']; ?></td>
			<td><?php echo $estudiosComplementario['created']; ?></td>
			<td><?php echo $estudiosComplementario['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'estudios_complementarios', 'action' => 'view', $estudiosComplementario['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'estudios_complementarios', 'action' => 'edit', $estudiosComplementario['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'estudios_complementarios', 'action' => 'delete', $estudiosComplementario['id']), null, __('Are you sure you want to delete # %s?', $estudiosComplementario['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estudios Complementario'), array('controller' => 'estudios_complementarios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Obras Sociales'); ?></h3>
	<?php if (!empty($paciente['ObrasSociale'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($paciente['ObrasSociale'] as $obrasSociale): ?>
		<tr>
			<td><?php echo $obrasSociale['id']; ?></td>
			<td><?php echo $obrasSociale['nombre']; ?></td>
			<td><?php echo $obrasSociale['telefono']; ?></td>
			<td><?php echo $obrasSociale['created']; ?></td>
			<td><?php echo $obrasSociale['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'obras_sociales', 'action' => 'view', $obrasSociale['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'obras_sociales', 'action' => 'edit', $obrasSociale['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'obras_sociales', 'action' => 'delete', $obrasSociale['id']), null, __('Are you sure you want to delete # %s?', $obrasSociale['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Obras Sociale'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Patologias'); ?></h3>
	<?php if (!empty($paciente['Patologia'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($paciente['Patologia'] as $patologia): ?>
		<tr>
			<td><?php echo $patologia['id']; ?></td>
			<td><?php echo $patologia['nombre']; ?></td>
			<td><?php echo $patologia['descripcion']; ?></td>
			<td><?php echo $patologia['created']; ?></td>
			<td><?php echo $patologia['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'patologias', 'action' => 'view', $patologia['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'patologias', 'action' => 'edit', $patologia['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'patologias', 'action' => 'delete', $patologia['id']), null, __('Are you sure you want to delete # %s?', $patologia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Patologia'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
