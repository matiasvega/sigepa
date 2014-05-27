<div class="especialidadesProfesionales view">
<h2><?php echo __('Especialidades Profesionale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($especialidadesProfesionale['EspecialidadesProfesionale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Especialidades'); ?></dt>
		<dd>
			<?php echo $this->Html->link($especialidadesProfesionale['Especialidades']['id'], array('controller' => 'especialidades', 'action' => 'view', $especialidadesProfesionale['Especialidades']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesionales'); ?></dt>
		<dd>
			<?php echo $this->Html->link($especialidadesProfesionale['Profesionales']['id'], array('controller' => 'profesionales', 'action' => 'view', $especialidadesProfesionale['Profesionales']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($especialidadesProfesionale['EspecialidadesProfesionale']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($especialidadesProfesionale['EspecialidadesProfesionale']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Especialidades Profesionale'), array('action' => 'edit', $especialidadesProfesionale['EspecialidadesProfesionale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Especialidades Profesionale'), array('action' => 'delete', $especialidadesProfesionale['EspecialidadesProfesionale']['id']), null, __('Are you sure you want to delete # %s?', $especialidadesProfesionale['EspecialidadesProfesionale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades Profesionales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidades Profesionale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Especialidades'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profesionales'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
	</ul>
</div>
