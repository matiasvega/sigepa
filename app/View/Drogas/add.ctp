<div class="drogas form">
<?php echo $this->Form->create('Droga'); ?>
	<fieldset>
		<legend><?php echo __('Add Droga'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('contraindicaciones');
		echo $this->Form->input('precauciones');
		echo $this->Form->input('interacciones');
		echo $this->Form->input('embarazo_lactancia');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Drogas'), array('action' => 'index')); ?></li>
	</ul>
</div>
