<?php
//    d($paciente);
?>

<script type="text/javascript">
    $(function() {
            $( "#tabs" ).tabs({ 
//                active: 1,
                collapsible: true,
//                heightStyle: "auto",
                show: false,
               
            });
    });
</script>

<div id="tabs">
	<ul>
		<li>                     
                    <?php
                    
                        echo $this->Html->link(
                                                'Datos Personales',
                                                array(
                                                    "controller" => "pacientes",
                                                    "action" => "edit",
                                                    $paciente['Paciente']['id'],
                                                    'full_base' => true
                                                )
                                            );
                    
                    ?>                                        
                </li>
		<li>                   
                    <?php
                    
                        echo $this->Html->link(
                                                'Obras Sociales',
                                                array(
                                                    "controller" => "obras_sociales_pacientes",
                                                    "action" => "index",
                                                    $paciente['Paciente']['id'],
                                                    'full_base' => true
                                                )
                                            );
                    
                    ?>                                        
                </li>                
		<li>
                     <?php
                    
                        echo $this->Html->link(
                                                'Antecedentes',
                                                array(
                                                    "controller" => "pacientes",
                                                    "action" => "antecedentes",
                                                    $paciente['Paciente']['id'],
                                                    'full_base' => true
                                                )
                                            );
                    
                    ?>
                </li>
		<li>
                      <?php
                    
                        echo $this->Html->link(
                                                'Examen Fisico',
                                                array(
                                                    "controller" => "examenes_fisicos",
                                                    "action" => "add",
                                                    $paciente['Paciente']['id'],
                                                    'full_base' => true
                                                )
                                            );
                    
                    ?>
                </li>
                <li>
                    <?php
                    
                        echo $this->Html->link(
                                                'Estudios',
                                                array(
                                                    "controller" => "estudios_complementarios_pacientes",
                                                    "action" => "add",
                                                    $paciente['Paciente']['id'],
                                                    'full_base' => true
                                                )
                                            );                    
                    ?>
                </li>
                <li>
                    <?php
                    
                        echo $this->Html->link(
                                                'Diagnostico',
                                                array(
                                                    "controller" => "diagnosticos",
                                                    "action" => "add",
                                                    $paciente['Paciente']['id'],
                                                    'full_base' => true
                                                )
                                            );                    
                    ?>
                </li>
                <li>
                    <?php
                    
                        echo $this->Html->link(
                                                'Recetas',
                                                array(
                                                    "controller" => "recetas",
                                                    "action" => "add",
                                                    $paciente['Paciente']['id'],
                                                    'full_base' => true
                                                )
                                            );                    
                    ?>
                </li>
	</ul>

</div>