<?php // dd('xxx'); ?>

<script type="text/javascript"> 
	$(document).ready(function () { 
		$('#PacienteAntecedentesForm').submit(function(){ 
			//serialize form data 
			var formData = $(this).serialize(); 
			var formUrl = $(this).attr('action');
			$.ajax({ 
				type: 'POST', 
				url: formUrl, 
				data: formData, 
                                cache: true,
				success: function(data,textStatus,xhr){ 
                                    alertPnotify("success", "OK","Datos guardados correctamente.");
				}, 
				error: function(xhr,textStatus,error){ 
                                    alertPnotify("error", "ERROR", textStatus);
				} 
			});	 
			return false;
		}); 
	});
</script>


<div class="pacientesForm">
<?php echo $this->Form->create('Paciente', array(
        'action' => 'antecedentes',
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

	<?php
                               
                echo $this->Form->input('atiopia');
		echo $this->Form->input('habitos');
		echo $this->Form->input('medicacion_base');
		echo $this->Form->input('familiares');
		echo $this->Form->input('otros');
		echo $this->Form->input('id', array(
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
        
<?php echo $this->Form->end(); ?>
</div>