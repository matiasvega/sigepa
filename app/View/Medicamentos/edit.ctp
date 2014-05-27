<div class="medicamentos form">
<?php echo $this->Form->create('Medicamento'); ?>
	<fieldset>
		<legend><?php echo __('Edit Medicamento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre_comercial');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('farmacologia');
		echo $this->Form->input('farmacodinamia');
		echo $this->Form->input('farmacocinetica');
		echo $this->Form->input('reacciones_adversas');
		echo $this->Form->input('indicaciones');
		echo $this->Form->input('dosificacion');
		echo $this->Form->input('sobredosificacion');
		echo $this->Form->input('presentacion');
		echo $this->Form->input('conservacion');
		echo $this->Form->input('advertencias');
		echo $this->Form->input('embarazo_lactancia');
		echo $this->Form->input('accion_terapeutica');
		echo $this->Form->input('drogas_id');
		echo $this->Form->input('contraindicaciones_id');
		echo $this->Form->input('grupos_terapeuticos_id');
		echo $this->Form->input('composiciones_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Medicamento.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Medicamento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Medicamentos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Drogas'), array('controller' => 'drogas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Drogas'), array('controller' => 'drogas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contraindicaciones'), array('controller' => 'contraindicaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contraindicaciones'), array('controller' => 'contraindicaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos Terapeuticos'), array('controller' => 'grupos_terapeuticos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupos Terapeuticos'), array('controller' => 'grupos_terapeuticos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Composiciones'), array('controller' => 'composiciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Composiciones'), array('controller' => 'composiciones', 'action' => 'add')); ?> </li>
	</ul>
</div>
