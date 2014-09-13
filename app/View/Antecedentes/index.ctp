<div class="antecedentes index">
	<h2><?php echo __('Antecedentes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('atiopia'); ?></th>
			<th><?php echo $this->Paginator->sort('habitos'); ?></th>
			<th><?php echo $this->Paginator->sort('medicacion_base'); ?></th>
			<th><?php echo $this->Paginator->sort('familiares'); ?></th>
			<th><?php echo $this->Paginator->sort('otros'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('pacientes_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($antecedentes as $antecedente): ?>
	<tr>
		<td><?php echo h($antecedente['Antecedente']['id']); ?>&nbsp;</td>
		<td><?php echo h($antecedente['Antecedente']['atiopia']); ?>&nbsp;</td>
		<td><?php echo h($antecedente['Antecedente']['habitos']); ?>&nbsp;</td>
		<td><?php echo h($antecedente['Antecedente']['medicacion_base']); ?>&nbsp;</td>
		<td><?php echo h($antecedente['Antecedente']['familiares']); ?>&nbsp;</td>
		<td><?php echo h($antecedente['Antecedente']['otros']); ?>&nbsp;</td>
		<td><?php echo h($antecedente['Antecedente']['created']); ?>&nbsp;</td>
		<td><?php echo h($antecedente['Antecedente']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($antecedente['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $antecedente['Pacientes']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $antecedente['Antecedente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $antecedente['Antecedente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $antecedente['Antecedente']['id']), null, __('Are you sure you want to delete # %s?', $antecedente['Antecedente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Antecedente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
