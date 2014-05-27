<div class="medicamentos view">
<h2><?php echo __('Medicamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Comercial'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['nombre_comercial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farmacologia'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['farmacologia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farmacodinamia'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['farmacodinamia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Farmacocinetica'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['farmacocinetica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reacciones Adversas'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['reacciones_adversas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Indicaciones'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['indicaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dosificacion'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['dosificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sobredosificacion'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['sobredosificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Presentacion'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['presentacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Conservacion'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['conservacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Advertencias'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['advertencias']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Embarazo Lactancia'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['embarazo_lactancia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accion Terapeutica'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['accion_terapeutica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Drogas'); ?></dt>
		<dd>
			<?php echo $this->Html->link($medicamento['Drogas']['id'], array('controller' => 'drogas', 'action' => 'view', $medicamento['Drogas']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contraindicaciones'); ?></dt>
		<dd>
			<?php echo $this->Html->link($medicamento['Contraindicaciones']['id'], array('controller' => 'contraindicaciones', 'action' => 'view', $medicamento['Contraindicaciones']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Grupos Terapeuticos'); ?></dt>
		<dd>
			<?php echo $this->Html->link($medicamento['GruposTerapeuticos']['id'], array('controller' => 'grupos_terapeuticos', 'action' => 'view', $medicamento['GruposTerapeuticos']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Composiciones'); ?></dt>
		<dd>
			<?php echo $this->Html->link($medicamento['Composiciones']['id'], array('controller' => 'composiciones', 'action' => 'view', $medicamento['Composiciones']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($medicamento['Medicamento']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Medicamento'), array('action' => 'edit', $medicamento['Medicamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Medicamento'), array('action' => 'delete', $medicamento['Medicamento']['id']), null, __('Are you sure you want to delete # %s?', $medicamento['Medicamento']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Medicamentos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Medicamento'), array('action' => 'add')); ?> </li>
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
