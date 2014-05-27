<script type="text/javascript"> 
    $(document).ready(function () { 
            $('#PacienteEditForm').submit(function(){ 
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
                            
                            $('input').prop('disabled', true);

                        }, 
                        error: function(xhr,textStatus,error){ 
                            alert(textStatus); 
                            alertPnotify("error", "ERROR",textStatus)
                        } 
                    });
                    return false; 
           });
           
           $('#editData').bind('click', function(){
                $('input').prop('disabled', false);
           
           });
            
            $('input').prop('disabled', true);
            
            
            $("#fechaNacimiento").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
//                numberOfMonths: 3,
                dateFormat: "dd-mm-yy",
                showAnim: "slide",
                changeYear: true,
                yearRange: "1901:<?php echo date('Y'); ?> ",
                dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
                monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec" ],
            });
            
            $('select').chosen();            
            
    });
</script>

<div class="pacientesForm">
<?php 
        echo $this->Form->create('Paciente', array(
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
		echo $this->Form->input('id');
		echo $this->Form->input('dni', array('type' => 'text'));
                echo $this->Form->input('apellido');
		echo $this->Form->input('nombre');
		
                                                
                echo $this->Form->input('sexo', array(
                        'type' => 'radio',
                        'before' => '<label class="col col-md-3 control-label"> Sexo </label>',
                        'legend' => false,
                        'class' => 'sexo',
                        'options' => array('M' => 'Masculino', 'F' => 'Femenino')
                ));                                                
                
		echo $this->Form->input('fechaNacimiento', array(
                                                                    'id' => 'fechaNacimiento',
                                                                    'type' => 'text',
                                                                ));
                
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefonoFijo', array('label' => 'Telefono'));
		echo $this->Form->input('telefonoMovil', array('label' => 'Celular'));
//		echo $this->Form->input('fechaUltimaConsulta');
//		echo $this->Form->input('EstudiosComplementario');
		echo $this->Form->input('ObrasSociale', array(
                    'data-placeholder' => 'Seleccione las obras sociales del paciente',
                    'label' => 'Obra Social',
                    'options' => $obrasSociales,
                    'value' => $obrasSocialesPaciente,
                ));
//		echo $this->Form->input('Patologia');
	?>
	<!--</fieldset>-->
<?php

    echo "<div id='x'>";
    
    echo $this->Form->button('Editar', array(  
                                            'id' => 'editData', 
                                            'type' => 'button',
                                            'value' => 'Editar',
                                            'class' => 'btn btn-lg btn-success'
                                        )
                        );
    
    echo $this->Form->button('Guardar', array(   
                                            'type' => 'submit',
                                            'value' => 'Guardar',
                                            'class' => 'btn btn-lg btn-success'
                                        )
                        );
   
    echo $this->Form->end(); 
    
    
    
    echo "</div>";

?>
</div>

<style>
    #x button {
        margin: 2px;
    }
        
    .sexo {
        width: 20%;
        display: inline-block;        
    }
    
    .sexo input {
        margin-top: -7px;
    }

</style>