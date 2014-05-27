<div class="examenesFisicos view">
<h2><?php echo __('Examenes Fisico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatura'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['estatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Peso'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['peso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Piel'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['piel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mucosas'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['mucosas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap Respiratorio'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['ap_respiratorio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('TA'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['TA']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FC'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['FC']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FR'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['FR']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Oximetria Pulso'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['oximetria_pulso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pacientes'); ?></dt>
		<dd>
			<?php echo $this->Html->link($examenesFisico['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $examenesFisico['Pacientes']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($examenesFisico['ExamenesFisico']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Examenes Fisico'), array('action' => 'edit', $examenesFisico['ExamenesFisico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Examenes Fisico'), array('action' => 'delete', $examenesFisico['ExamenesFisico']['id']), null, __('Are you sure you want to delete # %s?', $examenesFisico['ExamenesFisico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Examenes Fisicos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Examenes Fisico'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>
