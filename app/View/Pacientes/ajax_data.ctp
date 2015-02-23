<?php 
    $linkLocaleDataTable = $this->Html->url('/de_ES.txt', true);    

    $linkFicha = $this->Html->url(array(
         "controller" => "pacientes",
         "action" => "ficha",
     ), true);
    
    $linkDeletePaciente = $this->Html->url(array(
         "controller" => "pacientes",
         "action" => "deletePacienteAjax",
     ), true);
?>
 
<script type="text/javascript">
    $(document).ready(function() {
        console.log('XXXX');
        var table = $('#tabla1').dataTable({
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "<?php echo $this->Html->Url(array('controller' => 'Pacientes', 'action' => 'ajaxDataPacientes')); ?>",
//            "processing": true,
//            "serverSide": true,
//            "ajax": "<?php // echo $this->Html->Url(array('controller' => 'Pacientes', 'action' => 'ajaxDataPacientes')); ?>",
//            "columns": [
//                { "data": "nombre" },
//                { "data": "apellido" },
//                { "data": "sexo" },
//                { "data": "fechaNacimiento" },
//                { "data": "fechaUltimaConsulta" }                
//            ]
            "bJQueryUI": true,
            "aaSorting": [[ 0, "asc" ]],
            "bAutoWidth": false,
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "sPaginationType": "full_numbers",
            "oLanguage": {
                                    "sUrl": <?php echo sprintf("'%s'", $linkLocaleDataTable); ?> 
                        }

        });
        
       
         $('#tabla1 tbody').on('click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );

                
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

            $('#mostrarFicha').bind('click', function(){
                console.log('mostrar ficha!!!!');
                $('#tabla1 > tbody  > tr').each(function() {
                    if ( $(this).hasClass('selected') ) {
                        console.log($(this).prop("id"));
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
                    }                        
                });
            });
            
            $('#eliminarPaciente').bind('click', function(){
                $('#tabla1 > tbody  > tr').each(function() {
                    if ( $(this).hasClass('selected') ) {
                        if (confirm("Confirma que desea eliminar los datos del paciente seleccionado?")) {
                            $(location).attr('href', <?php echo sprintf("'%s'", $linkDeletePaciente); ?> + '/' + $(this).prop('id') + '/'); 
                        }
                    }
                })
            });
        
    });
</script>
 
<div class="pacientesIndex customIndex">
    <div id='top'>  
        <h2 id='title'><?php echo __('Pacientes'); ?></h2>
        <div id="botones"> 
           <?php

               echo $this->Html->image("ficha.png", array(
                                           'alt' => 'Ver ficha de paciente',
                                           'title' => 'Ver ficha de paciente',
                                           'class' => 'viewPaciente',
                                           'id' => 'mostrarFicha',
                                       ));
               
               echo $this->Html->image('delete.png', array(
                                                            'alt' => 'Eliminar', 
                                                            'title' => 'Eliminar', 
                                                            'id' => 'eliminarPaciente')
                                    );


           ?>
       </div>       
    </div>
    
    <table cellpadding="0" cellspacing="0" class="tabla" id="tabla1">
        <thead>
            <tr>
                <th> Nombre </th>
                <th> Apellido </th>
                <th> Sexo </th>
                <th> Fecha de Nacimiento</th>
                <th> Ultima consulta </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="5" class="dataTables_empty">Loading data from server...</td>
            </tr>
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
    
    table.tabla tbody tr.selected {
        background-color: #b0bed9;
    }
        
    #top * {
        float: left;
    }
    
    #top #botones {
        1background-color: orange;
        width: 50%;
        vertical-align: middle;        
        margin-top: 20px;
    }
    
    #top #botones img {
        cursor:pointer;
    }
        
    #top #botones #mostrarFicha {
        margin-left: 90%;        
    }
    
    #top #botones #eliminarPaciente {
        margin-top: 4px;
        margin-left: 4px;
    }    
    
    #top #title {
        1background-color: yellow;
        width: 50%;
    }
    
</style>