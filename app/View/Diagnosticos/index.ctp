<div class="diagnosticos index">
	<h2><?php echo __('Diagnosticos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha'); ?></th>
			<th><?php echo $this->Paginator->sort('diagnostico_presuntivo'); ?></th>
			<th><?php echo $this->Paginator->sort('pacientes_id'); ?></th>
			<th><?php echo $this->Paginator->sort('diagnostico_definitivo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($diagnosticos as $diagnostico): ?>
	<tr>
		<td><?php echo h($diagnostico['Diagnostico']['id']); ?>&nbsp;</td>
		<td><?php echo h($diagnostico['Diagnostico']['fecha']); ?>&nbsp;</td>
		<td><?php echo h($diagnostico['Diagnostico']['diagnostico_presuntivo']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($diagnostico['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $diagnostico['Pacientes']['id'])); ?>
		</td>
		<td><?php echo h($diagnostico['Diagnostico']['diagnostico_definitivo']); ?>&nbsp;</td>
		<td><?php echo h($diagnostico['Diagnostico']['created']); ?>&nbsp;</td>
		<td><?php echo h($diagnostico['Diagnostico']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $diagnostico['Diagnostico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $diagnostico['Diagnostico']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $diagnostico['Diagnostico']['id']), null, __('Are you sure you want to delete # %s?', $diagnostico['Diagnostico']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Diagnostico'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
