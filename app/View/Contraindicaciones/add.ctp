<div class="contraindicaciones form">
<?php echo $this->Form->create('Contraindicacione'); ?>
	<fieldset>
		<legend><?php echo __('Add Contraindicacione'); ?></legend>
	<?php
		echo $this->Form->input('contraindicacion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contraindicaciones'), array('action' => 'index')); ?></li>
	</ul>
</div>
