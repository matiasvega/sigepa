<div class="estudiosComplementariosPacientes index">
	<h2><?php echo __('Estudios Complementarios Pacientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pacientes_id'); ?></th>
			<th><?php echo $this->Paginator->sort('estudios_complementarios_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($estudiosComplementariosPacientes as $estudiosComplementariosPaciente): ?>
	<tr>
		<td><?php echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estudiosComplementariosPaciente['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $estudiosComplementariosPaciente['Pacientes']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($estudiosComplementariosPaciente['EstudiosComplementarios']['id'], array('controller' => 'estudios_complementarios', 'action' => 'view', $estudiosComplementariosPaciente['EstudiosComplementarios']['id'])); ?>
		</td>
		<td><?php echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['created']); ?>&nbsp;</td>
		<td><?php echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id']), null, __('Are you sure you want to delete # %s?', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estudios Complementarios Paciente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
