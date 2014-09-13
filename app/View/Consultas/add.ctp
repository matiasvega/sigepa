<?php 
//dd($turnos);
foreach ($turnos as $k => $turno) {
//        dd($turno);
    $events[$k]['title'] = sprintf('%s, %s', $turno['Paciente']['nombre'], $turno['Paciente']['apellido']);
    $events[$k]['start'] = $turno['Turno']['fechaHora'];
    $events[$k]['allDay'] = false;
    $events[$k]['id'] = $turno['Turno']['id'];
    $events[$k]['idPaciente'] = $turno['Paciente']['id'];
}

//    dd($events);
    echo $this->element('stackTurnos', array('events' => $events)); 

?>

<div id="contentTabs">
    <?php
//        echo $this->element('fichaPaciente', array('idPaciente' => $idPaciente)); 
    ?>
</div>
<!--<div class="demo-description">
<p>Click tabs to swap between content that is broken into logical sections.</p>
</div>-->



<style>

#calendar {
            width: 15%;
            margin: 0 auto;
            float:left;
}

#contentTabs {
    float:left;
    width: 84%;
}
                

</style>