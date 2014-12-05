<?php

$ficha = $this->Html->url(array(
         "controller" => "pacientes",
         "action" => "ficha",
//         $events[0]['idPaciente'],
     ), true);

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<script>

	$(document).ready(function() {
            
                // Por defecto cargo la ficha del primer turno
                $.ajax({
                    type: 'POST',    
                    async:true,
                    url: <?php echo sprintf("'%s'", $ficha); ?> + '/',
                    cache:true,                                        
                  })
                  .done(function(data) {
                            $("#contentTabs").html(data);                                            
                    });
        
	
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		var calendar = $('#calendar').fullCalendar({
			theme: true,
                        weekends: false,
                        header: false,
                        defaultView: 'basicDay',
                        aspectRatio: 0.50,
			selectable: true,
			selectHelper: true,
                        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                        monthAbbrevs: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dec'],
                        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado'],
                        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mie', 'Jue', 'Vie', 'Sab'],
                        eventClick: function(calEvent, jsEvent, view) {
                                console.log(calEvent);
                                console.log(calEvent.idPaciente);
                                $.ajax({
                                    type: 'GET',
//                                    data: date,
                                    async:true,
                                    url: <?php echo sprintf("'%s'", $ficha); ?> + '/' + calEvent.idPaciente,
                                    cache:false,                                        
//                                    beforeSend: function() {
//                                        $('#preload').html('%s');
//                                    }
                                  })
                                  .done(function(data) {
                                            $("#contentTabs").html(data);                                            
                                    });

                        },
			editable: true,			
                        events: <?php echo json_encode($events); ?>,
		});
		
	});

</script>




<div id='calendar'> </div>
