<div class="profesionales view">
<h2><?php echo __('Profesionale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($profesionale['Profesionale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($profesionale['Profesionale']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($profesionale['Profesionale']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Matricula'); ?></dt>
		<dd>
			<?php echo h($profesionale['Profesionale']['matricula']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaNacimiento'); ?></dt>
		<dd>
			<?php echo h($profesionale['Profesionale']['fechaNacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($profesionale['Profesionale']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($profesionale['Profesionale']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Profesionale'), array('action' => 'edit', $profesionale['Profesionale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Profesionale'), array('action' => 'delete', $profesionale['Profesionale']['id']), null, __('Are you sure you want to delete # %s?', $profesionale['Profesionale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesionale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociale'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Especialidades'); ?></h3>
	<?php if (!empty($profesionale['Especialidade'])): ?>
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
		foreach ($profesionale['Especialidade'] as $especialidade): ?>
		<tr>
			<td><?php echo $especialidade['id']; ?></td>
			<td><?php echo $especialidade['nombre']; ?></td>
			<td><?php echo $especialidade['descripcion']; ?></td>
			<td><?php echo $especialidade['created']; ?></td>
			<td><?php echo $especialidade['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'especialidades', 'action' => 'view', $especialidade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'especialidades', 'action' => 'edit', $especialidade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'especialidades', 'action' => 'delete', $especialidade['id']), null, __('Are you sure you want to delete # %s?', $especialidade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Especialidade'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Obras Sociales'); ?></h3>
	<?php if (!empty($profesionale['ObrasSociale'])): ?>
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
		foreach ($profesionale['ObrasSociale'] as $obrasSociale): ?>
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
