<div class="medicaciones view">
<h2><?php echo __('Medicacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($medicacione['Medicacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($medicacione['Medicacione']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($medicacione['Medicacione']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cantidad'); ?></dt>
		<dd>
			<?php echo h($medicacione['Medicacione']['cantidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($medicacione['Medicacione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($medicacione['Medicacione']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tratamientos'); ?></dt>
		<dd>
			<?php echo $this->Html->link($medicacione['Tratamientos']['id'], array('controller' => 'tratamientos', 'action' => 'view', $medicacione['Tratamientos']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Medicacione'), array('action' => 'edit', $medicacione['Medicacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Medicacione'), array('action' => 'delete', $medicacione['Medicacione']['id']), null, __('Are you sure you want to delete # %s?', $medicacione['Medicacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Medicaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicacione'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamientos'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
