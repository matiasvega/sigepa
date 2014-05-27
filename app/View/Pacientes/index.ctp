<?php 
    $linkLocaleDataTable = $this->Html->url('/de_ES.txt', true);    

    $linkFicha = $this->Html->url(array(
         "controller" => "pacientes",
         "action" => "ficha",
     ), true);
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
                      
                jQuery('.viewPaciente').bind('click', function() {
                    jQuery.ajax({
                      type: 'POST',
                      async:true,
                      url: <?php echo sprintf("'%s'", $linkFicha); ?> + '/' + jQuery(this).prop('id') + '/',
                      cache:true,
                    })
                      .done(function(data) {
                            jQuery("#fichaPaciente").html(data);                                            
                            jQuery("#fichaPaciente").dialog({
                                modal: true,
                                width: 970,
                                height: 600,
//                                height: 800,
                                draggable: true,
                                resizable: true,
                                title: 'Ficha de paciente',
                                show: {
                                    effect: "blind",
                                    duration: 1000,
                                },
                                hide: {
                                    effect: "fade",
                                    duration: 500,
                                },
                            });
                      });
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


<div class="pacientesIndex customIndex">
	<h2><?php echo __('Pacientes'); ?></h2>
        
	<table cellpadding="0" cellspacing="0" class="tabla">
        <thead>
            <tr>
                <!--<th> id </th>-->
                <th> DNI </th>
                <th> Nombre </th>
                <th> Apellido </th>
                <th> Sexo </th>
                <th> Fecha de Nacimiento</th>
                <!--<th> Direccion </th>-->
                <!--<th> Telefono </th>-->
                <!--<th> Celular </th>-->
                <th> Ultima consulta </th>
                <!--<th>created</th>-->
                <!--<th>modified</th>-->
                <th class="actions"><?php // echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
            <!--nocache-->
        <?php foreach ($pacientes as $paciente): 
                $ultimaConsulta = 'n/a';
                if ($paciente['Paciente']['fechaUltimaConsulta']) {
                    $ultimaConsulta = fecha($paciente['Paciente']['fechaUltimaConsulta']);
                }
        ?>
            <tr>                    
                    <!--<td><?php // echo h($paciente['Paciente']['id']); ?>&nbsp;</td>-->
                    <td><?php echo h($paciente['Paciente']['dni']); ?>&nbsp;</td>
                    <td><?php echo h($paciente['Paciente']['nombre']); ?>&nbsp;</td>
                    <td><?php echo h($paciente['Paciente']['apellido']); ?>&nbsp;</td>
                    <td><?php echo h(getSexo($paciente['Paciente']['sexo'])); ?>&nbsp;</td>
                    <td><?php echo h((fecha($paciente['Paciente']['fechaNacimiento']))); ?>&nbsp;</td>
                    <!--<td><?php // echo h($paciente['Paciente']['direccion']); ?>&nbsp;</td>-->
                    <!--<td><?php // echo h($paciente['Paciente']['telefonoFijo']); ?>&nbsp;</td>-->
                    <!--<td><?php // echo h($paciente['Paciente']['telefonoMovil']); ?>&nbsp;</td>-->
                    <td><?php echo h($ultimaConsulta); ?>&nbsp;</td>
                    <!--<td><?php // echo h($paciente['Paciente']['created']); ?>&nbsp;</td>-->
                    <!--<td><?php // echo h($paciente['Paciente']['modified']); ?>&nbsp;</td>-->
                    <td class="actions">
                            <?php 
                                
//                                echo $this->Html->link(__('View'), array('action' => 'ficha', $paciente['Paciente']['id'])); 
                                
//                                echo $this->Form->button('Ver', array(  
//                                                            'class' => 'viewPaciente btn btn-lg btn-success', 
//                                                            'type' => 'button',
//                                                            'value' => 'Ver',
//                                                            'id' => $paciente['Paciente']['id'],
////                                                            'disabled' => true,
//                                                        )
//                                            );
                                
                                echo $this->Html->image("ficha.png", array(
                                    'alt' => 'Ver ficha de paciente',
                                    'title' => 'Ver ficha de paciente',
                                    'class' => 'viewPaciente',
                                    'id' => $paciente['Paciente']['id'],
                                ));
                                
                                
                                
                            ?>                                                                                                                                                
                            <?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $paciente['Paciente']['id'])); ?>
                            <?php // echo $this->Html->link($this->Html->image('delete.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'delete', $paciente['Paciente']['id']), array('escape' => false), __('Confirma que desea eliminar los datos del paciente %s?', $paciente['Paciente']['nombre'] . " " . $paciente['Paciente']['apellido'])); ?>
                        
                            <?php echo $this->Form->postLink($this->Html->image('delete.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'delete', $paciente['Paciente']['id']), array('escape' => false), __('Confirma que desea eliminar los datos del paciente %s?', $paciente['Paciente']['nombre'] . " " . $paciente['Paciente']['apellido'])); ?>
                    </td>
            </tr>        
        <?php endforeach; ?>
            <!--/nocache-->
        </tbody>
	</table>
</div>       
    
<div id="fichaPaciente"></div>    
    
<div id="sidePanel">
    <div id="panelContent" >
        <div class="acciones">
	<ul>
		<li><?php echo $this->Html->link(__('Registrar Paciente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Estudio Complementario'), array('controller' => 'estudios_complementarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Obra Social'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Patologia'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
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