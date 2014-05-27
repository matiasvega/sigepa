<?php
    $indexObrasSocialesPaciente = $this->Html->url(array(
             "controller" => "obras_sociales_pacientes",
             "action" => "indexPaciente",
         ), true);
?>
<script type="text/javascript"> 
    $(document).ready(function () {             
            $('#ObrasSocialesPacienteEditForm').submit(function(){      
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
                            $('#indexObrasSocialesPacientes').load(<?php echo sprintf("'%s'", $indexObrasSocialesPaciente); ?> + '/' + <?php echo $idPaciente; ?>);
                            $('#editObraSocialPaciente').dialog("close");
                            alertPnotify("success", "OK","Datos guardados correctamente.");                            
                        }, 
                        error: function(xhr,textStatus,error){ 
                            alert(textStatus); 
                            alert(error); 
                            alertPnotify("error", textStatus)
                        } 
                    });

                    return false; 
           });                                           
    });
</script>

<div class="obrasSocialesPacientesForm">
<!--nocache-->    
<?php echo $this->Form->create('ObrasSocialesPaciente', array(
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
		<!--<legend><?php // echo __('Edit Obras Sociales Paciente'); ?></legend>-->
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('pacientes_id', array('type' => 'hidden'));
		echo $this->Form->input('obras_sociales_id', array(
                                                                        'type' => 'hidden',
                                                                    ));
                                        
                echo $this->Form->input('nro_afiliado', array(
                                                        'type' => 'text',
                                                        'label' => 'Numero de Afiliado',
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
<!--/nocache-->
</div>

<!--<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>

		<li><?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ObrasSocialesPaciente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ObrasSocialesPaciente.id'))); ?></li>
		<li><?php // echo $this->Html->link(__('List Obras Sociales Pacientes'), array('action' => 'index')); ?></li>
		<li><?php // echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
