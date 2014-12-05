<?php

$dia = substr($this->data['Turno']['fechaHora'], 8, 2);
$mes = substr($this->data['Turno']['fechaHora'], 5, 2);
$anio = substr($this->data['Turno']['fechaHora'], 0, 4);
$hora = substr($this->data['Turno']['fechaHora'], 11, 5);

    $linkDeleteTurno = $this->Html->url(array(
         "controller" => "turnos",
         "action" => "delete",
     ), true);
    
    $linkIndexTurnos = $this->Html->url(array(
         "controller" => "turnos",
         "action" => "index",
     ), true);

?>

<style>
    .ui-autocomplete-loading {
            background: white url('../img/ui-anim_basic_16x16.gif') right center no-repeat;
    }
</style>

<script type="text/javascript">  
        
    $(document).ready(function() {
        
//        $('#TurnoAddForm').submit(function(){ 
//                //serialize form data 
//                var formData = $(this).serialize(); 
////                    console.log(formData);
//                //get form action 
//                var formUrl = $(this).attr('action');
////                    console.log(formUrl);
//                $.ajax({ 
//                    type: 'POST', 
//                    url: formUrl, 
//                    data: formData, 
//                    success: function(data,textStatus,xhr){    
//                        alertPnotify("success", "OK","Datos guardados correctamente.");
////                            $( "#diagnosticosRealizados" ).load(<?php // echo sprintf("'%s'", $indexDiagnosticos); ?>  + '/' + <?php // echo $idPaciente; ?>);
////                            $('#buscarPaciente').append( new Option('nombre','99999999999') );
//                        $("#add-event").dialog('close');
//                    }, 
//                    error: function(xhr,textStatus,error){ 
//                        alertPnotify("error", "ERROR", textStatus);
//                    } 
//                });
//                return false; 
//       }); 
//    
        
        $('select').chosen({
            placeholder_text_single: 'Buscar paciente',
            no_results_text: "No se encontraron datos.",
            width: "135%",
            search_contains: true
        });
    
        $('#buscarPaciente').bind('change', function() {
            $('#idPaciente').val($(this).val());
        });
        
        $('.clockpicker').clockpicker({
            donetext: '',
            autoclose:true,
//            default: '16:00',
//            default:'<?php // echo substr($this->data['Turno']['fechaHora'], 11, 5); ?>',
        });
                
        $('.deleteTurno').bind('click', function() {
            if (confirm('Confirma que desea eliminar el turno?')) {
                $.ajax({ 
                    type: 'POST', 
                    url: <?php echo sprintf("'%s/'", $linkDeleteTurno); ?> + $(this).prop('id'),
                    success: function(data,textStatus,xhr){ 
                        alertPnotify("success", "OK","Los datos fueron eliminados");
//                        $( "#estudiosSolicitados" ).load(<?php // echo sprintf("'%s/%s'", $indexEstudios, $idPaciente); ?>);
                        $(location).attr('href',<?php echo sprintf("'%s/'", $linkIndexTurnos); ?>);
                    }, 
                    error: function(xhr,textStatus,error){ 
                        alert(textStatus); 
                    }
                });
            }
            
        });


    });

</script>


<div class="turnosAdd">
<?php echo $this->Form->create('Turno', array(
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
		<!--<legend><?php // echo __('Registrar turno de atencion'); ?></legend>-->                                                                     
	<?php
                
                echo $this->Form->input('pacientes_id', array(  'id' => 'buscarPaciente', 
                                                                'options' => $pacientes,
                                                                'data-placeholder' => 'Buscar paciente',
                                                                'required' => true,
                                                                'empty' => 'Buscar paciente',
                                                                'label' => false,
                                            )
                        );                                                               
                
                echo "<div id='contenedorHorario'>";
                                
                echo '<div class="input-group clockpicker">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-time"></span>
                    </span>
                    <input type="text" name="data[Turno][hora]" id="hora" class="form-control" value="'. $hora .'">
                </div>';
                         
                echo "</div>";
                
                echo $this->Form->input('id', array(    'id' => 'id', 
                                                        'type' => 'hidden',
                                                        'value' => $this->data['Turno']['id'],
                                                            )
                                        );
                
                echo $this->Form->input('idPaciente', array(    'id' => 'idPaciente', 
                                                                'type' => 'hidden',
                                                                'value' => $this->data['Turno']['pacientes_id'],
                                                            )
                                        );
                
                echo $this->Form->input('idProfesional', array(    'id' => 'idProfesional', 
                                                                   'type' => 'hidden',
                                                                   'value' => 1,
                                                            )
                                        );
////                
                echo $this->Form->input('idEspecialidad', array(    'id' => 'idEspecialidad', 
                                                                    'type' => 'hidden',
                                                                    'value' => 1,
                                                            )
                                        );
                
                echo $this->Form->input('dia', array(   'id' => 'dia', 
                                                        'type' => 'hidden',
                                                        'value' => $dia,
                                                            )
                                        );
                
                echo $this->Form->input('mes', array(   'id' => 'mes', 
                                                        'type' => 'hidden',
                                                        'value' => $mes,
                                                            )
                                        );
                
                echo $this->Form->input('anio', array(  'id' => 'anio', 
                                                        'type' => 'hidden',
                                                        'value' => $anio,
                                                            )
                                        );
//                
////		echo $this->Form->input('profesionales_id');
////		echo $this->Form->input('especialidades_id');
//              
                
                echo $this->Form->button('Guardar', array(   
                                            'type' => 'submit',
                                            'value' => 'Guardar',
                                            'class' => 'btn btn-lg btn-success'
                                        )
                        );                
                
                echo $this->Form->button('Eliminar', array(  
                                                        'id' => $this->data['Turno']['id'], 
                                                        'type' => 'button',
                                                        'value' => 'Eliminar',
                                                        'class' => 'btn btn-lg btn-success deleteTurno',
                                                    )
                                        );
                
                
	?>

                
                
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>

<?php

    echo "<div id='event'> </div>";

?>

<style>   
    
    button {
        float: right;        
        margin:4px;
        margin-top: 20px;
    }
    
</style>
    