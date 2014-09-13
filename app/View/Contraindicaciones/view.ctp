<div class="contraindicaciones view">
<h2><?php echo __('Contraindicacione'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contraindicacione['Contraindicacione']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contraindicacion'); ?></dt>
		<dd>
			<?php echo h($contraindicacione['Contraindicacione']['contraindicacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($contraindicacione['Contraindicacione']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($contraindicacione['Contraindicacione']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contraindicacione'), array('action' => 'edit', $contraindicacione['Contraindicacione']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contraindicacione'), array('action' => 'delete', $contraindicacione['Contraindicacione']['id']), null, __('Are you sure you want to delete # %s?', $contraindicacione['Contraindicacione']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contraindicaciones'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contraindicacione'), array('action' => 'add')); ?> </li>
	</ul>
</div>
