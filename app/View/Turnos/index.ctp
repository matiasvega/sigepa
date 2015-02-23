<?php

$addTurno = $this->Html->url(array(
         "controller" => "turnos",
         "action" => "add",
     ), true);

$editTurno = $this->Html->url(array(
         "controller" => "turnos",
         "action" => "edit",
     ), true);

$getTurnos = $this->Html->url(array(
         "controller" => "turnos",
         "action" => "getTurnos",
     ), true);

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<script>

    function mostrarCalendar(profesional_id) {
        
                    $('#calendar').fullCalendar( 'destroy' );
        
                    var date = new Date();
                    var d = date.getDate();
                    var m = date.getMonth();
                    var y = date.getFullYear();

                    var calendar = $('#calendar').fullCalendar({
                            minTime: "08:00:00",
                            maxTime: "22:00:00",
                            theme: true,
                            defaultView: 'month',
                            allDaySlot: false,
                            weekends: false,
                            header: {
                                    left: 'prev,next today',
                                    center: 'title',
                                    right: 'month,agendaWeek,agendaDay'
                            },
                            selectable: true,
                            selectHelper: true,
                            monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
     'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                            monthAbbrevs: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                            monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                            dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
                            dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                            //editable: false,
                            disableDragging: true,
                            disableResizing: true,
                            buttonText: {
                                    prev: "<span class='fc-text-arrow'>&lsaquo;</span>",
                                    next: "<span class='fc-text-arrow'>&rsaquo;</span>",
                                    prevYear: "<span class='fc-text-arrow'>&laquo;</span>",
                                    nextYear: "<span class='fc-text-arrow'>&raquo;</span>",
                                    today: 'Hoy',
                                    month: 'Mes',
                                    week: 'Semana',
                                    day: 'Dia'
                            },
    //			select: function(start, end, allDay) {
    //				var title = prompt('Event Title:');
    //				if (title) {
    //					calendar.fullCalendar('renderEvent',
    //						{
    //							title: title,
    //							start: start,
    //							end: end,
    //							allDay: allDay
    //						},
    //						true // make the event "stick"
    //					);
    //				}
    //				calendar.fullCalendar('unselect');
    //			},
                            editable: true,			
                            dayClick: function(date, allDay, jsEvent, view) {
    //                            console.log('Especialidad: ' + $('#especialidad_id').val());
    //                            console.log('Profesional: ' + $('#profesional_id').val());                            
                                var today = new Date();

                                if (date >= today) {

                                        if ($('#especialidad_id').val() != '' &&  $('#profesional_id').val()!= ''){
                                            $.ajax({
                                                type: 'GET',
        //                                        data: date,
                                                async:true,
                                                url: <?php echo sprintf("'%s'", $addTurno); ?> + '/' + date.getDate() + '/' + date.getMonth() + '/' + date.getFullYear() + '/' + $('#especialidad_id').val() + '/' + $('#profesional_id').val(),
                                                cache:false,                                        
        //                                        beforeSend: function() {
        //                                            $('#preload').html('%s');
        //                                        }
                                              })
                                                .done(function(data) {
        //                                            $('.preload').remove();
                                                    $("#add-event").html(data);                                            
                                                    $("#add-event").dialog({
                                                        modal: true,
                                                        width: 600,
                                                        height: 400,
                                                        draggable: true,
                                                        resizable: false,
                                                        title: 'Registrar turno de atencion',
                                                        show: {
                                                                effect: "blind",
                                                                duration: 1000,
                                                              },
                                                        hide: {
                                                          effect: "fade",
                                                          duration: 500,
                                                        },
                                                    });
                                            });
                                        } else {
                                            alertPnotify("error", "ERROR","Deben seleccionarse una especialidad y un profesional para asignar el turno.");
                                        }

                                } else {
                                    alertPnotify("error", "ERROR","No pueden registrarse turnos anteriores en el tiempo.");
    //                                alertPnotify("error", "ERROR","No pueden registrarse turnos para dias anteriores al " + today.getDate() + '/' + (today.getMonth()+1) + '/' + today.getFullYear() + ".");
                                }

                           },
                           eventClick: function(calEvent, jsEvent, view) {
                                console.log(calEvent);
                                console.log(calEvent.idTurno);
    //                            alert('Event: ' + calEvent.title);
    //                            alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
    //                            alert('View: ' + view.name);

                                // change the border color just for fun
                                $(this).css('border-color', 'red');
    //                            alert(<?php echo sprintf("'%s'", $editTurno); ?>);

                                $.ajax({
                                            type: 'GET',
    //                                        data: date,
                                            async:true,
                                            url: <?php echo sprintf("'%s'", $editTurno); ?> + '/' + calEvent.idTurno,
                                            cache:false,                                        
    //                                        beforeSend: function() {
    //                                            $('#preload').html('%s');
    //                                        }
                                          })
                                            .done(function(data) {
    //                                            $('.preload').remove();
                                                $("#add-event").html(data);                                            
                                                $("#add-event").dialog({
                                                    modal: true,
                                                    width: 600,
                                                    height: 400,
                                                    draggable: true,
                                                    resizable: false,
                                                    title: 'Turno de ' + calEvent.title,
                                                    show: {
                                                            effect: "blind",
                                                            duration: 1000,
                                                          },
                                                    hide: {
                                                      effect: "fade",
                                                      duration: 500,
                                                    },
                                                });
                                        });                                                                                                                                                                        
                            },
                           eventDragStop: function(event, jsEvent, ui, view) { 
                            console.log('xxxxxxxxxxxxxxxxxx');
                            console.log(event);
    //                        console.log(event.start);
                            console.log(event._start);
    //                        console.log(jsEvent);
    //                        console.log(ui);
    //                        console.log(view);
                           },
                           events: function(start, end, callback){
    //                                console.log(start);
    //                                console.log(end);
    //                                console.log(callback);
//                                      console.log(profesional_id);  
                                $.ajax({
                                            url: <?php echo sprintf("'%s'", $getTurnos); ?>,
    //                                        dataType: 'json',
                                            type: "POST",
                                            cache: false,
                                            data: {
                                                // our hypothetical feed requires UNIX timestamps
                                                anioDesde: start.getFullYear(),
                                                mesDesde: start.getMonth()+1,
                                                diaDesde: start.getDate(),
                                                anioHasta: end.getFullYear(),
                                                mesHasta: end.getMonth()+1,
                                                diaHasta: end.getDate(),
                                                profesional_id: profesional_id,
                                            },
                                            success: function(eventsJson) {
    //                                            console.log(eventsJson);
                                                var eventsArray = $.parseJSON(eventsJson);
    //                                            console.log(eventsArray);
                                                var events = [];
                                                $(eventsArray).each(function() {
                                                    events.push({
                                                        title: $(this).attr('title'),
                                                        start: $(this).attr('start'), // will be parsed
                                                        allDay: $(this).attr('allDay'),
                                                        idTurno: $(this).attr('idTurno'),
                                                    });
                                                });
                                                callback(events);
                                            }
                                        });
                           },
    //                       events: <?php // echo json_encode($events); ?>,
                    });
    }

$(document).ready(function() {
    $('select').chosen({
            placeholder_text_single: 'Buscar',
            no_results_text: "No se encontraron datos.",
            width: "100%",
//            search_contains: true
        });           
    
    mostrarCalendar();
});

</script>
<?php 
$getProfesionales = $this->Html->url(array(
         "controller" => "turnos",
         "action" => "getProfesionales",
     ), true);

$this->Js->get('#especialidad_id')->event(
      'change', sprintf("            
            $.ajax({
                dataType: 'json',
                async:true,
                url: '%s' + '/' + $(this).val(),
                cache:false,
                beforeSend: function() {
                                $(\"label[for='\"+$('#profesional_id').attr('id')+\"']\").append('%s');
                            }
              })
            .done(function(options) {
                $('.cargando').remove();
                
                // Limpio el combo de profesionales y agrego los valores que le corresponden
                $('#profesional_id').children().remove();

                if (options != null) {
                    $(\"label[for='\"+$('#profesional_id').attr('id')+\"']\").css('color', '#000000');
                    $('#profesional_id').append( new Option('Seleccionar Profesional','') );
                    $.each(options, function(index, value) { 
                       $('#profesional_id').append( new Option(value.apellido + ', ' + value.nombre, value.id) );
                    });	                    
                } else {
                    $('#profesional_id').append( new Option('Seleccionar Profesional','') );
                }
                $('#profesional_id').trigger('chosen:updated');


            });
        ", 
              $getProfesionales,
              '<img class="cargando" src="../../img/cargandoinputs.gif" />'
              )
    );

$this->Js->get('#profesional_id')->event(
      'change', "
            mostrarCalendar($(this).val());
"
    );

//    d($especialidades);    
//    d($profesionales);
//    d($turnos);
    $htmlFiltros[] = '<div id="contenedorFiltroTurnos">';

    $htmlFiltros[] = $this->Form->input('especialidad_id', array(   
                                                        'id' => 'especialidad_id',
                                                        'options' => $especialidades,
//                                                        'label' => false,
                                                        'data-placeholder' => 'Seleccionar Especialidad',
                                                        'empty' => 'Seleccionar Especialidad'
                                                    )
                            );    
//           dd($profesionales);
    $htmlFiltros[] = $this->Form->input('profesional_id', array(    
                                                        'id' => 'profesional_id',
                                                        'options' => $profesionales,
//                                                        'label' => false,
                                                        'data-placeholder' => 'Seleccionar Profesional',
                                                        'empty' => 'Seleccionar Profesional',
                                                )
                        );
                
    $htmlFiltros[] = "</div>";
    
    $events = array();
    if (!empty($turnos)) {        
        foreach ($turnos as $k => $turno) {
//            dd($turno);
            $events[$k]['title'] = sprintf('%s, %s', $turno['Paciente']['nombre'], $turno['Paciente']['apellido']);
            $events[$k]['start'] = $turno['Turno']['fechaHora'];
            $events[$k]['allDay'] = false;
            $events[$k]['idTurno'] = $turno['Turno']['id'];
        }
    }
//        dd($events);
//        dd(json_encode($events));
  
    $profesional = $this->Session->read('Auth.User.profesional');
    
    $nombreContenedorCalendar = 'contenedorCalendarProfesional';
    if (empty($profesional)) {
        echo implode("\n", $htmlFiltros);
        $nombreContenedorCalendar = 'contenedorCalendar';
    }    
    
    $htmlCalendar[] = sprintf('<div id="%s">', $nombreContenedorCalendar);
//    $htmlCalendar[] = $this->element('calendar', array('events' => $events)); 
    $htmlCalendar[] = "<div id='calendar'> </div>";
    $htmlCalendar[] = "</div>";
    $htmlCalendar[] = $this->Js->writeBuffer();
    
    echo implode("\n", $htmlCalendar);
    
    
?>
<div id="add-event"></div>
<div id="view-event"></div>
<style>
    #add-event {
        clear: both;
    }
    
    #contenedorFiltroTurnos {
        1background-color: yellow;
        width: 20%;
        float: left;
    }
    
    #contenedorCalendar {
        1background-color: orange;
        width: 80%;
        float: left;
    }
    
    #calendar {
        width: 95%;
        margin: 0 auto;
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
