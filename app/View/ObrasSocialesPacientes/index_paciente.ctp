<?php 
    $linkLocaleDataTable = $this->Html->url('/de_ES.txt', true);    
    
    $linkNroAfiliado = $this->Html->url(array(
         "controller" => "obras_sociales_pacientes",
         "action" => "edit",
     ), true);

?>
<script type="text/javascript">

    $(document).ready(function() {
        $('#obrasSocialesPaciente').dataTable({            
            "deferRender": true,
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false,
            "aaSorting": [[ 0, "asc" ]],
            "sPaginationType": "full_numbers",
            "bJQueryUI": true,
            "processing": true,
            "orderClasses": false,
            "oLanguage": {
                                    "sUrl": <?php echo sprintf("'%s'", $linkLocaleDataTable); ?> 
                                 }
        });
                
        $('.cargarNroAfiliado').bind('click', function() {
            $('#editObraSocialPaciente').load(<?php echo sprintf("'%s'", $linkNroAfiliado); ?> + '/' +  $(this).prop('id') + '/' + <?php echo $idPaciente; ?>);
            $('#editObraSocialPaciente').dialog({
                                        modal: true,
                                        width: 790,
                                        height: 240,
                                        draggable: true,
                                        resizable: true,
                                        title: 'Cargar numero de afiliado',
                                        show: {
                                                effect: "blind",
                                                duration: 1000,
                                              },
                                        hide: {
                                          effect: "fade",
                                          duration: 500,
                                        }
                                    });
            
        });
        
        
    });

</script>



<?php // d($obrasSocialesPacientes); ?>
<div class="obrasSocialesPacientesIndex">
	<h2><?php // echo __('Obras Sociales Pacientes'); ?></h2>
	<table cellpadding="0" cellspacing="0" id="obrasSocialesPaciente">
        <thead>
	<tr>
			<!--<th>id</th>-->
			<!--<th>pacientes_id</th>-->
			<th> Obra Social </th>
                        <th> Nro. Afiliado </th>
<!--			<th><?php // echo $this->Paginator->sort('created'); ?></th>
			<th><?php // echo $this->Paginator->sort('modified'); ?></th>-->
                        
			<th class="actions"><?php // echo __('Actions'); ?></th>
	</tr>
        </thead>
        <tbody>
            <!--nocache-->
	<?php foreach ($obrasSocialesPacientes as $obrasSocialesPaciente): ?>
	<tr>
		<!--<td><?php // echo h($obrasSocialesPaciente['ObrasSocialesPaciente']['id']); ?>&nbsp;</td>-->
<!--		<td>
			<?php // echo $this->Html->link($obrasSocialesPaciente['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $obrasSocialesPaciente['Pacientes']['id'])); ?>
		</td>-->
		<td>
			<?php // echo $this->Html->link($obrasSocialesPaciente['ObrasSociales']['id'], array('controller' => 'obras_sociales', 'action' => 'view', $obrasSocialesPaciente['ObrasSociales']['id'])); ?>
                        <?php echo h($obrasSocialesPaciente['ObrasSociale']['nombre']); ?>
                    
		</td>
                <td>
			<?php // echo $this->Html->link($obrasSocialesPaciente['ObrasSociales']['id'], array('controller' => 'obras_sociales', 'action' => 'view', $obrasSocialesPaciente['ObrasSociales']['id'])); ?>
                        <?php echo h($obrasSocialesPaciente['ObrasSocialesPaciente']['nro_afiliado']); ?>
                    
		</td>
		<!--<td><?php // echo h($obrasSocialesPaciente['ObrasSocialesPaciente']['created']); ?>&nbsp;</td>-->
		<!--<td><?php // echo h($obrasSocialesPaciente['ObrasSocialesPaciente']['modified']); ?>&nbsp;</td>-->
                
		<td class="actions">
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $obrasSocialesPaciente['ObrasSocialesPaciente']['id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $obrasSocialesPaciente['ObrasSocialesPaciente']['id'])); ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $obrasSocialesPaciente['ObrasSocialesPaciente']['id']), null, __('Are you sure you want to delete # %s?', $obrasSocialesPaciente['ObrasSocialesPaciente']['id'])); ?>
                    
                    
                    <?php echo $this->Html->image('add_result.png', array('alt' => 'Cargar numero de afiliado', 'title' => 'Cargar numero de afiliado', 'class' => 'cargarNroAfiliado', 'id' => $obrasSocialesPaciente['ObrasSocialesPaciente']['id'])); ?>
                            
                                <?php // echo $this->Form->postLink($this->Html->image('delete.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'delete', $obrasSocialesPaciente['ObrasSocialesPaciente']['id']), array('escape' => false), __('Confirma que desea eliminar los datos de la obra social %s?', $obrasSocialesPaciente['ObrasSociale']['nombre'])); ?>
                    
		</td>
	</tr>
<?php endforeach; ?>
        <!--/nocache-->
        </tbody>
	</table>
        
<!--	<p>
	<?php
//	echo $this->Paginator->counter(array(
//	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
//	));
	?>	</p>
	<div class="paging">
	<?php
//		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
//		echo $this->Paginator->numbers(array('separator' => ''));
//		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>-->
</div>

<!--<div id="editObraSocialPaciente"></div>-->


<!--<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>
		<li><?php // echo $this->Html->link(__('New Obras Sociales Paciente'), array('action' => 'add')); ?></li>
		<li><?php // echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
