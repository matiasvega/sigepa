<div class="recetas view">
<h2><?php echo __('Receta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($receta['Receta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pacientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($receta['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $receta['Pacientes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medicamentos'); ?></dt>
		<dd>
			<?php echo $this->Html->link($receta['Medicamentos']['id'], array('controller' => 'medicamentos', 'action' => 'view', $receta['Medicamentos']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($receta['Receta']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($receta['Receta']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($receta['Receta']['observaciones']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Receta'), array('action' => 'edit', $receta['Receta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Receta'), array('action' => 'delete', $receta['Receta']['id']), null, __('Are you sure you want to delete # %s?', $receta['Receta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recetas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Receta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Medicamentos'), array('controller' => 'medicamentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicamentos'), array('controller' => 'medicamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
