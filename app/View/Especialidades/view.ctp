<div class="especialidades view">
<h2><?php echo __('Especialidade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($especialidade['Especialidade']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Especialidade'), array('action' => 'edit', $especialidade['Especialidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Especialidade'), array('action' => 'delete', $especialidade['Especialidade']['id']), null, __('Are you sure you want to delete # %s?', $especialidade['Especialidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidade'), array('action' => 'add')); ?> </li>
	</ul>
</div>
