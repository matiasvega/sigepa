<div class="patologiasTratamientos index">
	<h2><?php echo __('Patologias Tratamientos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('patologias_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tratamientos_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($patologiasTratamientos as $patologiasTratamiento): ?>
	<tr>
		<td><?php echo h($patologiasTratamiento['PatologiasTratamiento']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($patologiasTratamiento['Patologias']['id'], array('controller' => 'patologias', 'action' => 'view', $patologiasTratamiento['Patologias']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($patologiasTratamiento['Tratamientos']['id'], array('controller' => 'tratamientos', 'action' => 'view', $patologiasTratamiento['Tratamientos']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $patologiasTratamiento['PatologiasTratamiento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $patologiasTratamiento['PatologiasTratamiento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $patologiasTratamiento['PatologiasTratamiento']['id']), null, __('Are you sure you want to delete # %s?', $patologiasTratamiento['PatologiasTratamiento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Patologias Tratamiento'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologias'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamientos'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
