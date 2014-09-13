<?php
    $indexExamenes = $this->Html->url(array(
         "controller" => "examenes_fisicos",
         "action" => "indexPaciente",
     ), true);
?>
<script type="text/javascript"> 
    $(document).ready(function () { 
            $('#ExamenesFisicoAddForm').submit(function(){ 
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
                            $( "#examenesRealizados" ).load(<?php echo sprintf("'%s'", $indexExamenes); ?>  + '/' + <?php echo $idPaciente; ?>);
                        }, 
                        error: function(xhr,textStatus,error){ 
                            alert(textStatus); 
                        } 
                    });
                    return false; 
           }); 
                      
           $( "#examenesRealizados" ).load(<?php echo sprintf("'%s'", $indexExamenes); ?>  + '/' + <?php echo $idPaciente; ?>);
           
    });
</script>


<div id="examenesRealizados" />

<div class="examenesFisicosForm">
<?php echo $this->Form->create('ExamenesFisico', array(
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
		<legend><?php echo __('Nuevo Examen Fisico'); ?></legend>
	<?php
		echo $this->Form->input('estatura');
		echo $this->Form->input('peso');
		echo $this->Form->input('piel');
		echo $this->Form->input('mucosas');
		echo $this->Form->input('ap_respiratorio');
		echo $this->Form->input('TA');
		echo $this->Form->input('FC');
		echo $this->Form->input('FR');
		echo $this->Form->input('oximetria_pulso');                
                echo $this->Form->input('pacientes_id', array(
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


<!--<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>

		<li><?php // echo $this->Html->link(__('List Examenes Fisicos'), array('action' => 'index')); ?></li>
		<li><?php // echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>-->

<style>
    #examenesRealizados {
        margin-bottom: 50px;
    }
</style>