<?php

//sleep(1);

$result = array();
foreach ($pacientes as $paciente) {
//    d($paciente);
    array_push($result, array(  "id" => $paciente['Paciente']['id'], 
//                                "label" => sprintf('%s, %s dni: %s', 
//                                                        $paciente['Paciente']['nombre'], 
//                                                        $paciente['Paciente']['apellido'],
//                                                        $paciente['Paciente']['dni']
//                                                    ), 
                                "value" => strip_tags(sprintf('%s, %s DNI:%s',  
                                                        $paciente['Paciente']['nombre'], 
                                                        $paciente['Paciente']['apellido'],
                                                        $paciente['Paciente']['dni']
                                                            )
                                                    ),
                            )
                );
}

// json_encode is available in PHP 5.2 and above, or you can install a PECL module in earlier versions
echo json_encode($result);

?>
