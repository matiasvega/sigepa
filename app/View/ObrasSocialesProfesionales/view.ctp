<div class="obrasSocialesProfesionales view">
<h2><?php echo __('Obras Sociales Profesionale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($obrasSocialesProfesionale['ObrasSocialesProfesionale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obras Sociales'); ?></dt>
		<dd>
			<?php echo $this->Html->link($obrasSocialesProfesionale['ObrasSociales']['id'], array('controller' => 'obras_sociales', 'action' => 'view', $obrasSocialesProfesionale['ObrasSociales']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesionales'); ?></dt>
		<dd>
			<?php echo $this->Html->link($obrasSocialesProfesionale['Profesionales']['id'], array('controller' => 'profesionales', 'action' => 'view', $obrasSocialesProfesionale['Profesionales']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($obrasSocialesProfesionale['ObrasSocialesProfesionale']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($obrasSocialesProfesionale['ObrasSocialesProfesionale']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Obras Sociales Profesionale'), array('action' => 'edit', $obrasSocialesProfesionale['ObrasSocialesProfesionale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Obras Sociales Profesionale'), array('action' => 'delete', $obrasSocialesProfesionale['ObrasSocialesProfesionale']['id']), null, __('Are you sure you want to delete # %s?', $obrasSocialesProfesionale['ObrasSocialesProfesionale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras Sociales Profesionales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociales Profesionale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesionales'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
	</ul>
</div>
