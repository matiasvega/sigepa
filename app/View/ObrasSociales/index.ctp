<?php 
    $linkLocaleDataTable = $this->Html->url('/de_ES.txt', true);    
    
?>
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
                                    "sUrl": <?php echo sprintf("'%s'", $linkLocaleDataTable); ?> 
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
<div class="obrasSocialesIndex customIndex">
	<h2><?php echo __('Obras Sociales'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="tabla">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Telefono</th>
                    <!--<th>Fecha Alta</th>-->
                    <!--<th><?php // echo $this->Paginator->sort('modified'); ?></th>-->
                    <th class="actions"><?php // echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
                <!--nocache-->
                <?php foreach ($obrasSociales as $obrasSociale): ?>
                <tr>
                        <td><?php echo h($obrasSociale['ObrasSociale']['id']); ?>&nbsp;</td>
                        <td><?php echo h($obrasSociale['ObrasSociale']['nombre']); ?>&nbsp;</td>
                        <td><?php echo h($obrasSociale['ObrasSociale']['telefono']); ?>&nbsp;</td>
                        <!--<td><?php // echo h($obrasSociale['ObrasSociale']['created']); ?>&nbsp;</td>-->
                        <!--<td><?php // echo h($obrasSociale['ObrasSociale']['modified']); ?>&nbsp;</td>-->
                        <td class="actions">
                                <?php // echo $this->Html->link(__('View'), array('action' => 'view', $obrasSociale['ObrasSociale']['id'])); ?>
                                <?php echo $this->Html->link($this->Html->image('edit.png', array('alt' => 'Editar', 'title' => 'Editar')), array('action' => 'edit', $obrasSociale['ObrasSociale']['id']), array('escape' => false)); ?>
                            
                                <?php echo $this->Form->postLink($this->Html->image('delete.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'delete', $obrasSociale['ObrasSociale']['id']), array('escape' => false), __('Confirma que desea eliminar los datos de la obra social %s?', $obrasSociale['ObrasSociale']['nombre'])); ?>
                        </td>
                </tr>
                <?php endforeach; ?>
                <!--/nocache-->
        </tbody>
	</table>

</div>

<div id="sidePanel">
    <div id="panelContent">
        <div class="acciones">
	<ul>
		<li><?php echo $this->Html->link(__('Alta de Obra Social'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Profesional'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
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
        
            
</style>    