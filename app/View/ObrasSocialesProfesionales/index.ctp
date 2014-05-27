<div class="obrasSocialesProfesionales index">
	<h2><?php echo __('Obras Sociales Profesionales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('obras_sociales_id'); ?></th>
			<th><?php echo $this->Paginator->sort('profesionales_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($obrasSocialesProfesionales as $obrasSocialesProfesionale): ?>
	<tr>
		<td><?php echo h($obrasSocialesProfesionale['ObrasSocialesProfesionale']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($obrasSocialesProfesionale['ObrasSociales']['id'], array('controller' => 'obras_sociales', 'action' => 'view', $obrasSocialesProfesionale['ObrasSociales']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($obrasSocialesProfesionale['Profesionales']['id'], array('controller' => 'profesionales', 'action' => 'view', $obrasSocialesProfesionale['Profesionales']['id'])); ?>
		</td>
		<td><?php echo h($obrasSocialesProfesionale['ObrasSocialesProfesionale']['created']); ?>&nbsp;</td>
		<td><?php echo h($obrasSocialesProfesionale['ObrasSocialesProfesionale']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $obrasSocialesProfesionale['ObrasSocialesProfesionale']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $obrasSocialesProfesionale['ObrasSocialesProfesionale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $obrasSocialesProfesionale['ObrasSocialesProfesionale']['id']), null, __('Are you sure you want to delete # %s?', $obrasSocialesProfesionale['ObrasSocialesProfesionale']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Obras Sociales Profesionale'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesionales'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
	</ul>
</div>
