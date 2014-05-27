<?php 
//    d($especialidades);    
//    d($profesionales);
//    d($turnos);
    echo '<div id="filtroTurnos">';

//    echo $this->Form->input('especialidad_id', array(   
//                                                        'id' => 'especialidad_id',
//                                                        'options' => $especialidades,
//                                                    )
//                            );    
//           
//    echo $this->Form->input('profesional_id', array(    
//                                                        'id' => 'profesional_id',
//                                                        'options' => $profesionales,
//                                                )
//                        );
    
//    echo $this->Form->input('especialidad_id', array(   
//                                                        'id' => 'especialidad_id',
//                                                        'type' => 'hidden',
//                                                        'value' => 1,
//                                                    )
//                            );    
//           
//    echo $this->Form->input('profesional_id', array(    
//                                                        'id' => 'profesional_id',
//                                                        'type' => 'hidden',
//                                                        'value' => 1,
//                                                )
//                        );
    
    
        
    echo "</div>";
    
    foreach ($turnos as $k => $turno) {
//        dd($turno);
        $events[$k]['title'] = sprintf('%s, %s', $turno['Paciente']['nombre'], $turno['Paciente']['apellido']);
        $events[$k]['start'] = $turno['Turno']['fechaHora'];
        $events[$k]['allDay'] = false;
    }
    
//    dd($events);
//    dd(json_encode($events));
    
    echo $this->element('calendar', array('events' => $events)); 
?>
<div id="add-event"></div>
<style>
    #add-event {
        clear: both;            
    }
    
/*    #filtroTurnos {
        width: 48%;
        margin-left: 26%;
        padding-top: 1%;
        margin-bottom: 3%;
    }
    
    #filtroTurnos div {        
        width: 50%;
        float: left;        
    }
    
    #filtroTurnos div label, select {
        clear: none;
        float: left;        
    }*/
    
    
</style>
