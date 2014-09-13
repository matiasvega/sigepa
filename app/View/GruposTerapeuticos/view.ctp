<div class="gruposTerapeuticos view">
<h2><?php echo __('Grupos Terapeutico'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($gruposTerapeutico['GruposTerapeutico']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($gruposTerapeutico['GruposTerapeutico']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($gruposTerapeutico['GruposTerapeutico']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($gruposTerapeutico['GruposTerapeutico']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($gruposTerapeutico['GruposTerapeutico']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Grupos Terapeutico'), array('action' => 'edit', $gruposTerapeutico['GruposTerapeutico']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Grupos Terapeutico'), array('action' => 'delete', $gruposTerapeutico['GruposTerapeutico']['id']), null, __('Are you sure you want to delete # %s?', $gruposTerapeutico['GruposTerapeutico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos Terapeuticos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupos Terapeutico'), array('action' => 'add')); ?> </li>
	</ul>
</div>
