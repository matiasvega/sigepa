<div class="pacientesView">
<h2><?php // echo __('Paciente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h(getSexo($paciente['Paciente']['sexo'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('FechaNacimiento'); ?></dt>
		<dd>
			<?php echo h(fecha($paciente['Paciente']['fechaNacimiento'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['telefonoFijo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['telefonoMovil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ultima Consulta'); ?></dt>
		<dd>
			<?php echo h(fecha($paciente['Paciente']['fechaUltimaConsulta'])); ?>
			&nbsp;
		</dd>
<!--		<dt><?php // echo __('Created'); ?></dt>
		<dd>
			<?php // echo h($paciente['Paciente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php // echo __('Modified'); ?></dt>
		<dd>
			<?php // echo h($paciente['Paciente']['modified']); ?>
			&nbsp;
		</dd>-->
	</dl>
</div>


