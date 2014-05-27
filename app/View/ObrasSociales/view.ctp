<div class="obrasSociales view">
<h2><?php echo __('Obras Sociale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($obrasSociale['ObrasSociale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($obrasSociale['ObrasSociale']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($obrasSociale['ObrasSociale']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($obrasSociale['ObrasSociale']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($obrasSociale['ObrasSociale']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Obras Sociale'), array('action' => 'edit', $obrasSociale['ObrasSociale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Obras Sociale'), array('action' => 'delete', $obrasSociale['ObrasSociale']['id']), null, __('Are you sure you want to delete # %s?', $obrasSociale['ObrasSociale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras Sociales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesionale'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pacientes'); ?></h3>
	<?php if (!empty($obrasSociale['Paciente'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('FechaNacimiento'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th><?php echo __('TelefonoFijo'); ?></th>
		<th><?php echo __('TelefonoMovil'); ?></th>
		<th><?php echo __('FechaUltimaConsulta'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($obrasSociale['Paciente'] as $paciente): ?>
		<tr>
			<td><?php echo $paciente['id']; ?></td>
			<td><?php echo $paciente['dni']; ?></td>
			<td><?php echo $paciente['nombre']; ?></td>
			<td><?php echo $paciente['apellido']; ?></td>
			<td><?php echo $paciente['sexo']; ?></td>
			<td><?php echo $paciente['fechaNacimiento']; ?></td>
			<td><?php echo $paciente['direccion']; ?></td>
			<td><?php echo $paciente['telefonoFijo']; ?></td>
			<td><?php echo $paciente['telefonoMovil']; ?></td>
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
<div class="related">
	<h3><?php echo __('Related Profesionales'); ?></h3>
	<?php if (!empty($obrasSociale['Profesionale'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Matricula'); ?></th>
		<th><?php echo __('FechaNacimiento'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($obrasSociale['Profesionale'] as $profesionale): ?>
		<tr>
			<td><?php echo $profesionale['id']; ?></td>
			<td><?php echo $profesionale['nombre']; ?></td>
			<td><?php echo $profesionale['apellido']; ?></td>
			<td><?php echo $profesionale['matricula']; ?></td>
			<td><?php echo $profesionale['fechaNacimiento']; ?></td>
			<td><?php echo $profesionale['created']; ?></td>
			<td><?php echo $profesionale['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'profesionales', 'action' => 'view', $profesionale['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'profesionales', 'action' => 'edit', $profesionale['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'profesionales', 'action' => 'delete', $profesionale['id']), null, __('Are you sure you want to delete # %s?', $profesionale['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Profesionale'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
