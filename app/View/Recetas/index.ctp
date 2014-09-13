<div class="recetas index">
	<h2><?php echo __('Recetas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('pacientes_id'); ?></th>
			<th><?php echo $this->Paginator->sort('medicamentos_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recetas as $receta): ?>
	<tr>
		<td><?php echo h($receta['Receta']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($receta['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $receta['Pacientes']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($receta['Medicamentos']['id'], array('controller' => 'medicamentos', 'action' => 'view', $receta['Medicamentos']['id'])); ?>
		</td>
		<td><?php echo h($receta['Receta']['created']); ?>&nbsp;</td>
		<td><?php echo h($receta['Receta']['modified']); ?>&nbsp;</td>
		<td><?php echo h($receta['Receta']['observaciones']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $receta['Receta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $receta['Receta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $receta['Receta']['id']), null, __('Are you sure you want to delete # %s?', $receta['Receta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Receta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Medicamentos'), array('controller' => 'medicamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicamentos'), array('controller' => 'medicamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
