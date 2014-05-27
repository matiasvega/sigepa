<div class="tratamientos view">
<h2><?php echo __('Tratamiento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tratamiento['Tratamiento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaInicio'); ?></dt>
		<dd>
			<?php echo h($tratamiento['Tratamiento']['fechaInicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaFin'); ?></dt>
		<dd>
			<?php echo h($tratamiento['Tratamiento']['fechaFin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tratamiento['Tratamiento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tratamiento['Tratamiento']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tratamiento'), array('action' => 'edit', $tratamiento['Tratamiento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tratamiento'), array('action' => 'delete', $tratamiento['Tratamiento']['id']), null, __('Are you sure you want to delete # %s?', $tratamiento['Tratamiento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamiento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Medicaciones'), array('controller' => 'medicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicacione'), array('controller' => 'medicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologia'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Medicaciones'); ?></h3>
	<?php if (!empty($tratamiento['Medicacione'])): ?>
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
		foreach ($tratamiento['Medicacione'] as $medicacione): ?>
		<tr>
			<td><?php echo $medicacione['id']; ?></td>
			<td><?php echo $medicacione['nombre']; ?></td>
			<td><?php echo $medicacione['descripcion']; ?></td>
			<td><?php echo $medicacione['created']; ?></td>
			<td><?php echo $medicacione['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'medicaciones', 'action' => 'view', $medicacione['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'medicaciones', 'action' => 'edit', $medicacione['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'medicaciones', 'action' => 'delete', $medicacione['id']), null, __('Are you sure you want to delete # %s?', $medicacione['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Medicacione'), array('controller' => 'medicaciones', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Patologias'); ?></h3>
	<?php if (!empty($tratamiento['Patologia'])): ?>
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
		foreach ($tratamiento['Patologia'] as $patologia): ?>
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
