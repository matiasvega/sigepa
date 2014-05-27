<script type="text/javascript">
        jQuery(document).ready(function() { 
            
                jQuery('.tabla').dataTable({
                      "bPaginate": true,
                      "bLengthChange": false,
                      "bFilter": true,
                      "bSort": true,
                      "bInfo": true,
                      "bAutoWidth": false,
                      "aaSorting": [[ 0, "asc" ]],
                      "sPaginationType": "full_numbers",
                      "bJQueryUI": true,
                      "oLanguage": {
                                    "sUrl": "http://localhost/devel/sigepa/de_ES.txt"
                                   }
                  });                
                                      
                jQuery('#panelHandle').hover(function() {
                    jQuery('#sidePanel').stop(true, false).animate({
                        'left': '0px'
                    }, 400);
                }, function() {
//                    var jq = jQuery.noConflict();
                });

                jQuery('#sidePanel').hover(function() {
                    // Do nothing
                }, function() {

//                    var jq = jQuery.noConflict();
                    jQuery('#sidePanel').animate({
                        left: '-201px'
                    }, 400);

                });
                
                
                
            });      
                    
</script>


<div class="medicamentosIndex customIndex">
	<h2><?php echo __('Medicamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="tabla">
        <thead>
	<tr>
			<!--<th>id</th>-->
			<th> Nombre </th>
			<!--<th> Descripcion</th>-->
<!--			<th>farmacologia</th>
			<th>farmacodinamia</th>
			<th>farmacocinetica</th>
			<th>reacciones_adversas</th>
			<th>indicaciones</th>
			<th>dosificacion</th>
			<th>sobredosificacion</th>-->
			<th> Presentacion </th>
<!--			<th>conservacion</th>
			<th>advertencias</th>
			<th>embarazo_lactancia</th>-->
			<th> Accion terapeutica </th>
<!--			<th>drogas_id</th>
			<th>contraindicaciones_id</th>
			<th>grupos_terapeuticos_id</th>
			<th>composiciones_id</th>-->
<!--			<th>created</th>
			<th>modified</th>-->
			<th class="actions"><?php // echo __('Actions'); ?></th>
	</tr>
        </thead>
        <tbody>
	<?php foreach ($medicamentos as $medicamento): ?>
	<tr>
		<!--<td><?php // echo h($medicamento['Medicamento']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($medicamento['Medicamento']['nombre_comercial']); ?>&nbsp;</td>
		<!--<td><?php // echo h($medicamento['Medicamento']['descripcion']); ?>&nbsp;</td>-->
<!--		<td><?php // echo h($medicamento['Medicamento']['farmacologia']); ?>&nbsp;</td>
		<td><?php // echo h($medicamento['Medicamento']['farmacodinamia']); ?>&nbsp;</td>
		<td><?php // echo h($medicamento['Medicamento']['farmacocinetica']); ?>&nbsp;</td>
		<td><?php // echo h($medicamento['Medicamento']['reacciones_adversas']); ?>&nbsp;</td>
		<td><?php // echo h($medicamento['Medicamento']['indicaciones']); ?>&nbsp;</td>
		<td><?php // echo h($medicamento['Medicamento']['dosificacion']); ?>&nbsp;</td>
		<td><?php // echo h($medicamento['Medicamento']['sobredosificacion']); ?>&nbsp;</td>-->
		<td><?php echo h($medicamento['Medicamento']['presentacion']); ?>&nbsp;</td>
<!--		<td><?php // echo h($medicamento['Medicamento']['conservacion']); ?>&nbsp;</td>
		<td><?php // echo h($medicamento['Medicamento']['advertencias']); ?>&nbsp;</td>
		<td><?php // echo h($medicamento['Medicamento']['embarazo_lactancia']); ?>&nbsp;</td>-->
		<td><?php echo h($medicamento['Medicamento']['accion_terapeutica']); ?>&nbsp;</td>

                
<!--		<td>
			<?php // echo $this->Html->link($medicamento['Drogas']['id'], array('controller' => 'drogas', 'action' => 'view', $medicamento['Drogas']['id'])); ?>
		</td>
		<td>
			<?php // echo $this->Html->link($medicamento['Contraindicaciones']['id'], array('controller' => 'contraindicaciones', 'action' => 'view', $medicamento['Contraindicaciones']['id'])); ?>
		</td>
		<td>
			<?php // echo $this->Html->link($medicamento['GruposTerapeuticos']['id'], array('controller' => 'grupos_terapeuticos', 'action' => 'view', $medicamento['GruposTerapeuticos']['id'])); ?>
		</td>
		<td>
			<?php // echo $this->Html->link($medicamento['Composiciones']['id'], array('controller' => 'composiciones', 'action' => 'view', $medicamento['Composiciones']['id'])); ?>
		</td>
                
                -->
<!--		<td><?php // echo h($medicamento['Medicamento']['created']); ?>&nbsp;</td>
		<td><?php // echo h($medicamento['Medicamento']['modified']); ?>&nbsp;</td>-->
                
                
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $medicamento['Medicamento']['id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $medicamento['Medicamento']['id'])); ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $medicamento['Medicamento']['id']), null, __('Are you sure you want to delete # %s?', $medicamento['Medicamento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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


<div id="sidePanel">
    <div id="panelContent">
        <div class="acciones">
	<ul>

            
	</ul>        
        </div>
    </div>
    <div id="panelHandle"><p>Acciones</p></div>
</div>

<style>
    .customIndex {
        margin-left:2%;
    }   
    
    label {
        width: 100%;        
    }
        
    input, textarea {
        clear: both;
        font-size: 90%;
        font-family: "frutiger linotype", "lucida grande", "verdana", sans-serif;
        width: 40%;
    }
    
    label input {
        height: 40px;
    }
        
    .ui-buttonset .ui-button {
        margin-left: 0;
        margin-right: -.1em;
    }
            
</style>  