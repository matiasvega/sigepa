<div class="patologiasTratamientos view">
<h2><?php echo __('Patologias Tratamiento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($patologiasTratamiento['PatologiasTratamiento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Patologias'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patologiasTratamiento['Patologias']['id'], array('controller' => 'patologias', 'action' => 'view', $patologiasTratamiento['Patologias']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tratamientos'); ?></dt>
		<dd>
			<?php echo $this->Html->link($patologiasTratamiento['Tratamientos']['id'], array('controller' => 'tratamientos', 'action' => 'view', $patologiasTratamiento['Tratamientos']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Patologias Tratamiento'), array('action' => 'edit', $patologiasTratamiento['PatologiasTratamiento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Patologias Tratamiento'), array('action' => 'delete', $patologiasTratamiento['PatologiasTratamiento']['id']), null, __('Are you sure you want to delete # %s?', $patologiasTratamiento['PatologiasTratamiento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Patologias Tratamientos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologias Tratamiento'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Patologias'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tratamientos'), array('controller' => 'tratamientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tratamientos'), array('controller' => 'tratamientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
