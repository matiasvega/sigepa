<div class="drogas view">
<h2><?php echo __('Droga'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($droga['Droga']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($droga['Droga']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contraindicaciones'); ?></dt>
		<dd>
			<?php echo h($droga['Droga']['contraindicaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Precauciones'); ?></dt>
		<dd>
			<?php echo h($droga['Droga']['precauciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interacciones'); ?></dt>
		<dd>
			<?php echo h($droga['Droga']['interacciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Embarazo Lactancia'); ?></dt>
		<dd>
			<?php echo h($droga['Droga']['embarazo_lactancia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($droga['Droga']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($droga['Droga']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Droga'), array('action' => 'edit', $droga['Droga']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Droga'), array('action' => 'delete', $droga['Droga']['id']), null, __('Are you sure you want to delete # %s?', $droga['Droga']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Drogas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Droga'), array('action' => 'add')); ?> </li>
	</ul>
</div>
