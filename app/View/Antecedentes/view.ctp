<div class="antecedentes view">
<h2><?php echo __('Antecedente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($antecedente['Antecedente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atiopia'); ?></dt>
		<dd>
			<?php echo h($antecedente['Antecedente']['atiopia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Habitos'); ?></dt>
		<dd>
			<?php echo h($antecedente['Antecedente']['habitos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Medicacion Base'); ?></dt>
		<dd>
			<?php echo h($antecedente['Antecedente']['medicacion_base']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familiares'); ?></dt>
		<dd>
			<?php echo h($antecedente['Antecedente']['familiares']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Otros'); ?></dt>
		<dd>
			<?php echo h($antecedente['Antecedente']['otros']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($antecedente['Antecedente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($antecedente['Antecedente']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pacientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($antecedente['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $antecedente['Pacientes']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Antecedente'), array('action' => 'edit', $antecedente['Antecedente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Antecedente'), array('action' => 'delete', $antecedente['Antecedente']['id']), null, __('Are you sure you want to delete # %s?', $antecedente['Antecedente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Antecedentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Antecedente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
