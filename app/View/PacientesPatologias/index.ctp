<div class="pacientesPatologias index">
	<h2><?php echo __('Pacientes Patologias'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('patologias_id'); ?></th>
			<th><?php echo $this->Paginator->sort('pacientes_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tratamientos_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort(' modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pacientesPatologias as $pacientesPatologia): ?>
	<tr>
		<td><?php echo h($pacientesPatologia['PacientesPatologia']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($pacientesPatologia['Patologias']['id'], array('controller' => 'patologias', 'action' => 'view', $pacientesPatologia['Patologias']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pacientesPatologia['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $pacientesPatologia['Pacientes']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($pacientesPatologia['Tratamientos']['id'], array('controller' => 'tratamientos', 'action' => 'view', $pacientesPatologia['Tratamientos']['id'])); ?>
		</td>
		<td><?php echo h($pacientesPatologia['PacientesPatologia']['created']); ?>&nbsp;</td>
		<td><?php echo h($pacientesPatologia['PacientesPatologia'][' modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pacientesPatologia['PacientesPatologia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pacientesPatologia['PacientesPatologia']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pacientesPatologia['PacientesPatologia']['id']), null, __('Are you sure you want to delete # %s?', $pacientesPatologia['PacientesPatologia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pacientes Patologia'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologias'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamientos'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
