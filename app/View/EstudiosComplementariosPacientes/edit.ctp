<?php

    $indexEstudios = $this->Html->url(array(
         "controller" => "estudios_complementarios_pacientes",
         "action" => "indexPaciente",
     ), true);
    
?>
<script type="text/javascript"> 
    $(document).ready(function () { 
            $('#EstudiosComplementariosPacienteEditForm').submit(function(){ 
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
                            $("#estudiosSolicitados").load(<?php echo sprintf("'%s'", $indexEstudios); ?>  + '/' + <?php echo $idPaciente; ?>);
                            $('#editEstudio').dialog("close");
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
                      
            $("#fechaRealizado").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                changeYear: true,
                defaultDate:<?php echo date('d-m-Y'); ?>,
    //                numberOfMonths: 3,
                dateFormat: "dd-mm-yy",
                showAnim: "slide",
                altFormat: "dd-mm-yy",
                yearRange: "1901:<?php echo date('Y'); ?> ",
                dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
                monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec" ],
            });
           
    });
</script>


<div class="estudiosComplementariosPacientesForm">
<?php echo $this->Form->create('EstudiosComplementariosPaciente', array(
        'type' => 'file',
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
		<!--<legend><?php // echo __('Edit Estudios Complementarios Paciente'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pacientes_id', array(
                        'type' => 'hidden',
                ));
//		echo $this->Form->input('estudios_complementarios_id');
                echo $this->Form->input('fechaRealizado', array(
                    'id' => 'fechaRealizado',
                    'type' => 'text',
//                    'dateFormat' => 'DMY',
                ));
                echo $this->Form->input('resultado');
                echo $this->Form->input('adjunto', array(   'type' => 'file',
                                                            'label' => 'Archivo adjunto'
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

		<li><?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('EstudiosComplementariosPaciente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('EstudiosComplementariosPaciente.id'))); ?></li>
		<li><?php // echo $this->Html->link(__('List Estudios Complementarios Pacientes'), array('action' => 'index')); ?></li>
		<li><?php // echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
