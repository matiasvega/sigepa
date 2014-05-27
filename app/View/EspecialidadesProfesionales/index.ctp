<div class="especialidadesProfesionales index">
	<h2><?php echo __('Especialidades Profesionales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('especialidades_id'); ?></th>
			<th><?php echo $this->Paginator->sort('profesionales_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($especialidadesProfesionales as $especialidadesProfesionale): ?>
	<tr>
		<td><?php echo h($especialidadesProfesionale['EspecialidadesProfesionale']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($especialidadesProfesionale['Especialidades']['id'], array('controller' => 'especialidades', 'action' => 'view', $especialidadesProfesionale['Especialidades']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($especialidadesProfesionale['Profesionales']['id'], array('controller' => 'profesionales', 'action' => 'view', $especialidadesProfesionale['Profesionales']['id'])); ?>
		</td>
		<td><?php echo h($especialidadesProfesionale['EspecialidadesProfesionale']['created']); ?>&nbsp;</td>
		<td><?php echo h($especialidadesProfesionale['EspecialidadesProfesionale']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $especialidadesProfesionale['EspecialidadesProfesionale']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $especialidadesProfesionale['EspecialidadesProfesionale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $especialidadesProfesionale['EspecialidadesProfesionale']['id']), null, __('Are you sure you want to delete # %s?', $especialidadesProfesionale['EspecialidadesProfesionale']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Especialidades Profesionale'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidades'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesionales'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
	</ul>
</div>
