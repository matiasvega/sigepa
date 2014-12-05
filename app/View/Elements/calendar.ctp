<?php

$addTurno = $this->Html->url(array(
         "controller" => "turnos",
         "action" => "add",
     ), true);

$editTurno = $this->Html->url(array(
         "controller" => "turnos",
         "action" => "edit",
     ), true);

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<script>

	$(document).ready(function() {
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = $('#calendar').fullCalendar({
                        minTime: "08:00:00",
                        maxTime: "22:00:00",
			theme: true,
                        defaultView: 'agendaWeek',
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
                        monthAbbrevs: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dec'],
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
                       events: <?php echo json_encode($events); ?>,
		});
		
	});

</script>

<style>

	#calendar {
		width: 70%;
		margin: 0 auto;
		}

</style>


<div id='calendar'> </div>
