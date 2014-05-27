<script type="text/javascript">

    jQuery(document).ready(function() {
        
        jQuery('#guardarPaciente').bind('click', function() {
            $('#PacienteAddForm').submit();
//            $('#event').dialog('close');
 
        });
        
        jQuery("#fechaNacimiento").datepicker({
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

        jQuery('select').chosen();
        
        jQuery('#panelHandle').hover(function() {
            jQuery('#sidePanel').stop(true, false).animate({
                'left': '0px'
            }, 400);
        }, function() {
//                    var jq = jQuery.noConflict();
        });

        jQuery('#sidePanel').hover(function() {
            // Do nothing
        }, function() {

//                    var jq = jQuery.noConflict();
            jQuery('#sidePanel').animate({
                left: '-201px'
            }, 400);

        });
        
    });

</script>


<div class="pacientesAdd">
<!--nocache-->    
<?php echo $this->Form->create('Paciente', array(
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
		<legend><?php echo __('Registrar Paciente'); ?></legend>
	<?php		
                
                echo $this->Form->input('dni', array(
                                                                'required' => true,
                                                                'type' => 'text',
                                                            )
                                                );
                
		echo $this->Form->input('apellido', array(
                                                                'required' => true,
                                                            ));
                
                echo $this->Form->input('nombre', array(
                                                                'required' => true,
                                                            ));
                

                
                echo $this->Form->input('sexo', array(
                        'type' => 'radio',
                        'before' => '<label class="col col-md-3 control-label"> Sexo </label>',
                        'legend' => false,
                        'class' => 'sexo',
                        'options' => array('M' => 'Masculino', 'F' => 'Femenino'),
//                        'required' => true,
                ));                                                
                
		echo $this->Form->input('fechaNacimiento', array(
                                                                    'id' => 'fechaNacimiento',
                                                                    'type' => 'text',
                                                                ));
                
                
                
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefonoFijo', array('label' => 'Telefono'));
		echo $this->Form->input('telefonoMovil', array('label' => 'Celular'));
//		echo $this->Form->input('fechaUltimaConsulta');
                echo $this->Form->input('ObrasSociale', array(
                    'data-placeholder' => 'Seleccione las obras sociales del paciente',
                    'label' => 'Obra Social',
                ));
                
//		echo $this->Form->input('EstudiosComplementario');		
//		echo $this->Form->input('Patologia');
                
                echo $this->Form->button('Guardar', array(   
                                            'type' => 'submit',
                                            'value' => 'Guardar',
                                            'class' => 'btn btn-lg btn-success'
                                        )
                        );
	?>
         
	</fieldset>
    
    
<?php 
//echo '<div class="submit">';
//echo $this->Form->button('Guardar', array(  
//                                            'id' => 'guardarPaciente',
//                                            'type' => 'button',
//                                            'value' => 'Guardar',
//                                            )
//                            );
//echo '</div>';

echo $this->Form->end(); 


?>
<!--/nocache-->
</div>

<div id="sidePanel">
    <div id="panelContent">
        <div class="acciones">
	<ul>

		<li><?php echo $this->Html->link(__('Listado Pacientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Estudio Complementario'), array('controller' => 'estudios_complementarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Alta Obras Social'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Patologias'), array('controller' => 'patologias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Patologia'), array('controller' => 'patologias', 'action' => 'add')); ?> </li>
	</ul>
        </div>
    </div>
    <div id="panelHandle"><p>Acciones</p></div>
</div>  


<style>
    
    .pacientesAdd {
        margin-left:2%;
    }
    
/*    #PacienteAddForm div {
        clear: both;
	margin-bottom: 1em;
	padding: .5em;
	vertical-align: text-top;        
    }
    
    #PacienteAddForm .submit {
        text-align: right;
    }
    
    #PacienteAddForm button {        
        background: #62af56;
        background-image: -webkit-gradient(linear, left top, left bottom, from(#76BF6B), to(#3B8230));
        background-image: -webkit-linear-gradient(top, #76BF6B, #3B8230);
        background-image: -moz-linear-gradient(top, #76BF6B, #3B8230);
        border-color: #2d6324;
        color: #fff;
        text-shadow: rgba(0, 0, 0, 0.5) 0px -1px 0px;
        padding: 8px 10px;

    }

    #PacienteAddForm button:hover {
        background: #5BA150;
    }*/

    .sexo {
        width: 15%;
        display: inline-block;
    }
   

    
</style>
