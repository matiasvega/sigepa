<div class="pacientes index">
	<h2><?php echo __('Pacientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('apellido'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaNacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefonoFijo'); ?></th>
			<th><?php echo $this->Paginator->sort('telefonoMovil'); ?></th>
			<th><?php echo $this->Paginator->sort('fechaUltimaConsulta'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pacientes as $paciente): ?>
	<tr>
		<td><?php echo h($paciente['Paciente']['id']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['dni']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['fechaNacimiento']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['telefonoFijo']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['telefonoMovil']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['fechaUltimaConsulta']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['created']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paciente['Paciente']['id']), null, __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Paciente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudios Complementario'), array('controller' => 'estudios_complementarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociale'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologia'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
	</ul>
</div>
