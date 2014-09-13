<div class="examenesFisicos index">
	<h2><?php echo __('Examenes Fisicos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('estatura'); ?></th>
			<th><?php echo $this->Paginator->sort('peso'); ?></th>
			<th><?php echo $this->Paginator->sort('piel'); ?></th>
			<th><?php echo $this->Paginator->sort('mucosas'); ?></th>
			<th><?php echo $this->Paginator->sort('ap_respiratorio'); ?></th>
			<th><?php echo $this->Paginator->sort('TA'); ?></th>
			<th><?php echo $this->Paginator->sort('FC'); ?></th>
			<th><?php echo $this->Paginator->sort('FR'); ?></th>
			<th><?php echo $this->Paginator->sort('oximetria_pulso'); ?></th>
			<th><?php echo $this->Paginator->sort('pacientes_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($examenesFisicos as $examenesFisico): ?>
	<tr>
		<td><?php echo h($examenesFisico['ExamenesFisico']['id']); ?>&nbsp;</td>
		<td><?php echo h($examenesFisico['ExamenesFisico']['estatura']); ?>&nbsp;</td>
		<td><?php echo h($examenesFisico['ExamenesFisico']['peso']); ?>&nbsp;</td>
		<td><?php echo h($examenesFisico['ExamenesFisico']['piel']); ?>&nbsp;</td>
		<td><?php echo h($examenesFisico['ExamenesFisico']['mucosas']); ?>&nbsp;</td>
		<td><?php echo h($examenesFisico['ExamenesFisico']['ap_respiratorio']); ?>&nbsp;</td>
		<td><?php echo h($examenesFisico['ExamenesFisico']['TA']); ?>&nbsp;</td>
		<td><?php echo h($examenesFisico['ExamenesFisico']['FC']); ?>&nbsp;</td>
		<td><?php echo h($examenesFisico['ExamenesFisico']['FR']); ?>&nbsp;</td>
		<td><?php echo h($examenesFisico['ExamenesFisico']['oximetria_pulso']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($examenesFisico['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $examenesFisico['Pacientes']['id'])); ?>
		</td>
		<td><?php echo h($examenesFisico['ExamenesFisico']['created']); ?>&nbsp;</td>
		<td><?php echo h($examenesFisico['ExamenesFisico']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $examenesFisico['ExamenesFisico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $examenesFisico['ExamenesFisico']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $examenesFisico['ExamenesFisico']['id']), null, __('Are you sure you want to delete # %s?', $examenesFisico['ExamenesFisico']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Examenes Fisico'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
