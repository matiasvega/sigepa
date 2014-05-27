<?php

    $indexEstudios = $this->Html->url(array(
         "controller" => "estudios_complementarios_pacientes",
         "action" => "indexPaciente",
     ), true);
    
?>
<script type="text/javascript"> 
    $(document).ready(function () { 
            $('#EstudiosComplementariosPacienteAddForm').submit(function(){ 
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
    //					alert(data); 
//                            console.log('Datos Guardados');
                            alertPnotify("success", "OK","Datos guardados correctamente.");
                            $( "#estudiosSolicitados" ).load(<?php echo sprintf("'%s'", $indexEstudios); ?>  + '/' + <?php echo $idPaciente; ?>);
                        }, 
                        error: function(xhr,textStatus,error){ 
                            alert(textStatus); 
                        } 
                    });
                    return false; 
           }); 
                      
           $( "#estudiosSolicitados" ).load(<?php echo sprintf("'%s'", $indexEstudios); ?>  + '/' +  + <?php echo $idPaciente; ?>);
           
           jQuery('select').chosen();
           
    });
</script>


<div id="estudiosSolicitados"> </div>
<div id="editEstudio"> </div>

<div class="estudiosComplementariosPacientesForm">
<?php echo $this->Form->create('EstudiosComplementariosPaciente', array(
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
		<legend><?php echo __('Nuevo Estudio'); ?></legend>
	<?php
                echo $this->Form->input('pacientes_id', array(
                                                                'type' => 'hidden',
                                                                'value' => $idPaciente,
                                                                )
                                        );
                
		echo $this->Form->input('estudios_complementarios_id', array(
                                                                                'label' => 'Estudio',
                                                                            )
                                        );
                
                echo $this->Form->input('fechaSolicitado', array(
                                                                'type' => 'hidden',
                                                                'value' => date('Y-m-d'),
                                                                )
                                        );
                
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

		<li><?php // echo $this->Html->link(__('List Estudios Complementarios Pacientes'), array('action' => 'index')); ?></li>
		<li><?php // echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'add')); ?> </li>
	</ul>
</div>-->

<style>
    #estudiosSolicitados {
        margin-bottom: 50px;
    }
</style>
