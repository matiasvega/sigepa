<div class="contraindicaciones index">
	<h2><?php echo __('Contraindicaciones'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('contraindicacion'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contraindicaciones as $contraindicacione): ?>
	<tr>
		<td><?php echo h($contraindicacione['Contraindicacione']['id']); ?>&nbsp;</td>
		<td><?php echo h($contraindicacione['Contraindicacione']['contraindicacion']); ?>&nbsp;</td>
		<td><?php echo h($contraindicacione['Contraindicacione']['created']); ?>&nbsp;</td>
		<td><?php echo h($contraindicacione['Contraindicacione']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contraindicacione['Contraindicacione']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contraindicacione['Contraindicacione']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contraindicacione['Contraindicacione']['id']), null, __('Are you sure you want to delete # %s?', $contraindicacione['Contraindicacione']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contraindicacione'), array('action' => 'add')); ?></li>
	</ul>
</div>
