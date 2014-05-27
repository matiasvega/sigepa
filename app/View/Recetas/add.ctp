<?php

    $linkRecetas = $this->Html->url(array(
         "controller" => "recetas",
         "action" => "indexPaciente",
        $idPaciente,
     ), true);
    
    $getMedicamentos = $this->Html->url(array(
         "controller" => "recetas",
         "action" => "getMedicamentos",
     ), true);
        
    $viewMedicamento = $this->Html->url(array(
         "controller" => "medicamentos",
         "action" => "viewMedicamento",
     ), true);

?>
<script type="text/javascript"> 
    $(document).ready(function () { 
            $('#RecetaAddForm').submit(function(){ 
                    //serialize form data 
                    var formData = $(this).serialize(); 
//                    console.log(formData);
                    //get form action 
                    var formUrl = $(this).attr('action');
//                    console.log(formUrl);
                    $.ajax({ 
                        type: 'POST', 
                        url: formUrl, 
                        data: formData, 
                        success: function(data,textStatus,xhr){    
                            alertPnotify("success", "OK","Datos guardados correctamente.");
                            $( "#recetasRealizadas" ).load(<?php echo sprintf("'%s'", $linkRecetas); ?>  + '/');
                        }, 
                        error: function(xhr,textStatus,error){ 
                            alertPnotify("error", "ERROR", textStatus);
                        } 
                    });
                    return false; 
           }); 
                      
           $( "#recetasRealizadas" ).load(<?php echo sprintf("'%s'", $linkRecetas); ?>  + '/');
           
           jQuery('select').chosen();
           
           
           var filtros = function() {
              
               $.ajax({
                type: 'POST',
                dataType: 'json',
                async:true,
                url: <?php echo sprintf("'%s'", $getMedicamentos); ?>  + '/'  + $(this).val() + '/' + $('#droga').val() + '/',
                cache:true,
//                beforeSend: function() {
//                                $(\"label[for='\"+$('#comboCarteras').attr('id')+\"']\").append('%s');
//                            }
              })
                .done(function(options) {
//                    $('.cargando').remove();
                    // Limpio el combo de carteras y agrego los valores que le corresponden
                    $('#medicamentos').children().remove();

                    if (options != null) {
//                        $(\"label[for='\"+$('#comboCarteras').attr('id')+\"']\").css('color', '#000000');
                        $.each(options, function(index, value) { 
                           $('#medicamentos').append( new Option(value,index) );
                        });	                    
                    } else {
                        $('#medicamentos').append( new Option('Elegi la Cartera','') );
                    }
                    $('#medicamentos').trigger('chosen:updated');

                })
           };
           
           $('#grupo_terapeutico').bind('change', filtros);                
           $('#droga').bind('change', filtros);
           
           $('#medicamentos').bind('change', function() {
//                $('#medicamentos').append();
                $('#infoMedicamento').remove();
                
                $("label[for='medicamentos']").append(<?php echo sprintf("'%s'", $this->Html->div("infoMedicamento", $this->Html->image("info.png"),array('id' => 'infoMedicamento')));  ?>);
                
                $('#infoMedicamento').bind('click', function() {
                    jQuery.ajax({
                      type: 'POST',
                      async:true,
                      url: <?php echo sprintf("'%s'", $viewMedicamento); ?>  + '/' + $('#medicamentos').val() + '/',
                      cache:true,
                    })
                      .done(function(data) {
                            $("#viewMedicamento").html(data);                                            
                            $("#viewMedicamento").dialog({
                                modal: true,
                                width: 650,
                                height: 600,
                                draggable: true,
                                resizable: true,
                                title: 'Ficha de medicamento',
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
                
           });           
           
    });
</script>

<div id="recetasRealizadas"> </div>
<div class="recetasForm">
<?php echo $this->Form->create('Receta', array(
	'inputDefaults' => array(
		'div' => 'form-group',
		'label' => array(
			'class' => 'col col-md-3 control-label'
		),
		'wrapInput' => 'col col-md-9',
		'class' => 'form-control'
	),
	'class' => 'well form-horizontal'
)); ?>
	<fieldset>
		<legend><?php echo __('Registrar Receta'); ?></legend>
	<?php                
                echo $this->Form->input('pacientes_id', array (
                                                                    'type' => 'hidden',
                                                                    'value' => $idPaciente,
                                                                )
                                        );
                                                                                
                echo $this->Form->input('grupo_terapeutico', array(
                    'options' => $gruposTerapeuticos,
                    'id' => 'grupo_terapeutico',
                    'empty' => 'Seleccionar'
                ));
                        
                echo $this->Form->input('droga', array(
                    'options' => $drogas,
                    'id' => 'droga',
                    'empty' => 'Seleccionar'
                ));
                                
		echo $this->Form->input('medicamentos_id', array(
                    'required' => true,
//                    'options' => $medicamentos,
                    'id' => 'medicamentos',
                    'label' => 'Medicamento',
                    'empty' => 'Seleccionar',
//                    'div' => 'infoMedicamento'
                ));                
                
		echo $this->Form->input('observaciones');
                
                echo $this->Form->button('Guardar', array(   
                                            'type' => 'submit',
                                            'value' => 'Guardar',
                                            'class' => 'btn btn-lg btn-success'
                                        )
                        );
	?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>


<!--<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>

		<li><?php // echo $this->Html->link(__('List Recetas'), array('action' => 'index')); ?></li>
		<li><?php // echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Medicamentos'), array('controller' => 'medicamentos', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Medicamentos'), array('controller' => 'medicamentos', 'action' => 'add')); ?> </li>
	</ul>
</div>-->

<div id="viewMedicamento"></div>

<style>
    #recetasRealizadas {
        margin-bottom: 50px;
    }
    
    #infoMedicamento {
        width: 30px;
        float: right;
    }
    
    #infoMedicamento img {
        margin-top: -16px;
        margin-left: 4px;
        cursor: pointer;
    }
    
</style>    
