<?php

    $indexDiagnosticos = $this->Html->url(array(
         "controller" => "diagnosticos",
         "action" => "indexPaciente",
     ), true);
    
?>
<script type="text/javascript"> 
    $(document).ready(function () { 
            $('#DiagnosticoAddForm').submit(function(){ 
                    //serialize form data 
                    var formData = $(this).serialize(); 
                    console.log(formData);
                    //get form action 
                    var formUrl = $(this).attr('action');
                    console.log(formUrl);
                    $.ajax({ 
                        type: 'POST', 
                        url: formUrl, 
                        data: formData, 
                        success: function(data,textStatus,xhr){    
                            alertPnotify("success", "OK","Datos guardados correctamente.");
                            $( "#diagnosticosRealizados" ).load(<?php echo sprintf("'%s'", $indexDiagnosticos); ?>  + '/' + <?php echo $idPaciente; ?>);
                        }, 
                        error: function(xhr,textStatus,error){ 
                            alertPnotify("error", "ERROR", textStatus);
                        } 
                    });
                    return false; 
           }); 
                      
           $( "#diagnosticosRealizados" ).load(<?php echo sprintf("'%s'", $indexDiagnosticos); ?>  + '/' + <?php echo $idPaciente; ?>);
           
    });
</script>


<div id="diagnosticosRealizados"> </div>
<div id="editDiagnostico"> </div>
<div class="diagnosticosForm">
<?php echo $this->Form->create('Diagnostico', array(
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
		<legend><?php echo __('Registrar Diagnostico'); ?></legend>
	<?php
//		echo $this->Form->input('fecha');
		echo $this->Form->input('diagnostico_presuntivo', array(
                    'required' => true
                ));
//		echo $this->Form->input('diagnostico_definitivo');
		echo $this->Form->input('pacientes_id', array (
                                                                    'type' => 'hidden',
                                                                    'value' => $idPaciente,
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

<style>
    #diagnosticosRealizados {
        margin-bottom: 50px;
    }
</style>



<!--
<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>

		<li><?php // echo $this->Html->link(__('List Diagnosticos'), array('action' => 'index')); ?></li>
		<li><?php // echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
