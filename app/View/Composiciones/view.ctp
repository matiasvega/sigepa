<div class="composiciones view">
<h2><?php echo __('Composicione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($composicione['Composicione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($composicione['Composicione']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($composicione['Composicione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($composicione['Composicione']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Composicione'), array('action' => 'edit', $composicione['Composicione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Composicione'), array('action' => 'delete', $composicione['Composicione']['id']), null, __('Are you sure you want to delete # %s?', $composicione['Composicione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Composiciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composicione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
