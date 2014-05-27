<?php

    $indexDiagnosticos = $this->Html->url(array(
         "controller" => "diagnosticos",
         "action" => "indexPaciente",
     ), true);
    
?>
<script type="text/javascript"> 
    $(document).ready(function () { 
            $('#DiagnosticoEditForm').submit(function(){ 
                    //serialize form data 
//                    var formData = $(this).serialize(); 
                    var formData = new FormData($(this)[0]);
                    console.log(formData);
                    //get form action 
                    var formUrl = $(this).attr('action');
                    console.log(formUrl);
                    $.ajax({ 
                        type: 'POST', 
                        url: formUrl, 
                        data: formData, 
//                        mimeType:"multipart/form-data",
                        contentType: false,
                        cache: false,
                        processData:false,
                        success: function(data,textStatus,xhr){                             
                            $("#diagnosticosRealizados").load(<?php echo sprintf("'%s'", $indexDiagnosticos); ?>  + '/' + <?php echo $idPaciente; ?>);
                            $('#editDiagnostico').dialog("close");
                            alertPnotify("success", "OK","Datos guardados correctamente.");
                        }, 
                        error: function(xhr,textStatus,error){ 
//                            alert(textStatus); 
//                            console.log(textStatus);
                            alertPnotify("error", "ERROR", textStatus);
                        }                         
                    });
                  
                    return false;                     
           }); 
           $('select').chosen();
    });
</script>

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
		<!--<legend><?php // echo __('Edit Diagnostico'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
//		echo $this->Form->input('fecha');
//		echo $this->Form->input('diagnostico_presuntivo');
//		echo $this->Form->input('pacientes_id');
		echo $this->Form->input('diagnostico_definitivo');
                
                echo $this->Form->input('patologias_id', array(
                    'options' => $patologias,
                    'label' => 'Patologia',
                ));
                
                
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

		<li><?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Diagnostico.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Diagnostico.id'))); ?></li>
		<li><?php // echo $this->Html->link(__('List Diagnosticos'), array('action' => 'index')); ?></li>
		<li><?php // echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
