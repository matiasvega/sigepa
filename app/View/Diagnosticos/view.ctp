<div class="diagnosticos view">
<h2><?php echo __('Diagnostico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($diagnostico['Diagnostico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($diagnostico['Diagnostico']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diagnostico Presuntivo'); ?></dt>
		<dd>
			<?php echo h($diagnostico['Diagnostico']['diagnostico_presuntivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pacientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($diagnostico['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $diagnostico['Pacientes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Diagnostico Definitivo'); ?></dt>
		<dd>
			<?php echo h($diagnostico['Diagnostico']['diagnostico_definitivo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($diagnostico['Diagnostico']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($diagnostico['Diagnostico']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Diagnostico'), array('action' => 'edit', $diagnostico['Diagnostico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Diagnostico'), array('action' => 'delete', $diagnostico['Diagnostico']['id']), null, __('Are you sure you want to delete # %s?', $diagnostico['Diagnostico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Diagnosticos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Diagnostico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
