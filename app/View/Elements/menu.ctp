    <script>

        (function($){ //create closure so we can safely use $ as alias for jQuery

                $(document).ready(function(){

                        // initialise plugin
                        var example = $('#example').superfish({
                            delay:100,
                            speed:'normal',
                            speedOut:'fast',  
                            animation:{opacity:'show',height:'show'},
                                //add options here if required
                        });

                        // buttons to demonstrate Superfish's public methods
                        $('.destroy').on('click', function(){
                                example.superfish('destroy');
                        });

                        $('.init').on('click', function(){
                                example.superfish();
                        });

                        $('.open').on('click', function(){
                                example.children('li:first').superfish('show');
                        });

                        $('.close').on('click', function(){
                                example.children('li:first').superfish('hide');
                        });
                });

        })(jQuery);


    </script>

    
    <!--FULL_BASE_URL -->
    
    <?php
//        dd($this->Session->read('Auth.User.grantActions'));
        
//        $opcionesMenu = array(  'Gestion de Turnos' => array('Turnos'   => array(  
//                                                                                    'index' => 'Calendario',
//                                                                                    'agendaDiaria' => 'Agenda diaria',
//                                                                                ) 
//                                                 ),
//                                'Gestion de Pacientes' => array('Pacientes' => array(   
//                                                                                        'index' => 'Listado de Pacientes',
//                                                                                        'add' => 'Registrar Paciente',
//                                                                                )
//                                                                ),
//                                'Configuracion' => array(   'Especialidades' => array('index' => 'Listado de Especialidades'),
//                                                            'Medicamentos' => array('index' => 'Listado de Medicamentos'),
//                                                            'Profesionales' => array('index' => 'Listado de Profesionales'),
//                                    
//                                                        ), 
////                                'Seguridad' => array(),
//                            );
//
//        $html = array();        
//        foreach ($opcionesMenu as $nombreMenu => $opcionMenu) {            
//            foreach ($this->Session->read('Auth.User.grantActions') as $controller => $actions) {                
//                if (array_key_exists($controller, $opcionMenu)) {
//                    $html[] = "<li>";
//    //                $html[] = $this->Html->link($controller, sprintf('/%s/%s', $controller, 'index'));
//                    $html[] = $this->Html->link($nombreMenu, '#');
////                    $html[] = $this->Html->link($nombreMenu, '#');
//                    $html[] = " <ul>";
//                                        
//                    foreach ($actions as $action => $boolean) {                        
//                        if (array_key_exists($action, $opcionMenu[$controller])) {                            
//                            $html[] = sprintf('<li> %s </li>', $this->Html->link($opcionMenu[$controller][$action], sprintf('/%s/%s', $controller, $action)));
//                        }
//                    }
////                    dd($htmlOpciones);
////                    $html[$nombreMenu][] = implode("\n", $htmlOpciones);
//                    $html[] = " </ul>";
//                    $html[] = "</li>";                    
//                }
//            }            
//        }
//        dd(array_unique($html['Configuracion']));
//        d($html);
//        d($html['Configuracion']);
        
//        dd(array_unique($html));
        
        $itemsMenu = array(
            array(
                'nombreItem' => 'Gestion de Turnos',
                'subItems' => array(
                    array(
                        'controller' => 'Turnos',
                        'action' => 'index',
                        'nombre' => 'Calendario',
                    ),
                    array(
                        'controller' => 'Turnos',
                        'action' => 'agendaDiaria',
                        'nombre' => 'Agenda diaria',
                    )
                ),
            ),
            array(
                'nombreItem' => 'Gestion de Pacientes',
                'subItems' => array(
                    array(
                        'controller' => 'Pacientes',
                        'action' => 'index',
                        'nombre' => 'Listado de pacientes',
                    ),
                    array(
                        'controller' => 'Pacientes',
                        'action' => 'add',
                        'nombre' => 'Registrar paciente',
                    )
                ),
            ),
            array(
                'nombreItem' => 'Configuracion',
                'subItems' => array(
                    array(
                        'controller' => 'Especialidades',
                        'action' => 'index',
                        'nombre' => 'Especialidades',
                    ),
                    array(
                        'controller' => 'EstudiosComplementarios',
                        'action' => 'index',
                        'nombre' => 'Estudios Complementarios',
                    ),
                    array(
                        'controller' => 'Medicamentos',
                        'action' => 'index',
                        'nombre' => 'Medicamentos',
                    ),
                    array(
                        'controller' => 'ObrasSociales',
                        'action' => 'index',
                        'nombre' => 'Obras Sociales',
                    ),
                    array(
                        'controller' => 'Patologias',
                        'action' => 'index',
                        'nombre' => 'Patologias',
                    ),
                    array(
                        'controller' => 'Tratamientos',
                        'action' => 'index',
                        'nombre' => 'Tratamientos',
                    ),
                    array(
                        'controller' => 'Profesionales',
                        'action' => 'index',
                        'nombre' => 'Profesionales',
                    ),
                ),
            ),
            array(
                'nombreItem' => 'Seguridad',
                'subItems' => array(
                    array(
                        'controller' => 'Users',
                        'action' => 'index',
                        'nombre' => 'Usuarios',
                    ),
                    array(
                        'controller' => 'Groups',
                        'action' => 'index',
                        'nombre' => 'Grupos',
                    ),
                    array(
                        'controller' => 'Users',
                        'action' => 'options',
                        'nombre' => 'Preferencias de Usuario',
                        'param' => $this->Session->read('Auth.User.id'),
                    ),
                    array(
                        'controller' => 'admin',
                        'action' => 'acl',
                        'nombre' => 'Privilegios',
                    ),
                    array(
                        'controller' => 'Backups',
                        'action' => 'index',
                        'nombre' => 'Backups',
                    ),
                ),
            ),
        );
                
//        dd($itemsMenu);
        
//        dd($this->Session->read('Auth.User.group_id'));
//        dd($this->Session->read('Auth.User.grantActions'));
        
        
//        dd($grantAction['Backups']);
        
        function verifyPrivileges($grantAction, $controlador, $accion) {
                //d($controlador);
//                if ($controlador == 'backups') {
//                    d($accion);
//                    dd($grantAction);
//                }
//            d($grantAction);
//            d($controlador);
            if (!empty($grantAction)) {                
                if (array_key_exists($controlador, $grantAction)) {
    //                return true;
                    if (array_key_exists($accion, $grantAction[$controlador])) {
                        return true;
                    }
                } else {
                    return false;
                }
            } else {
                return false;
            }
//            return true;
        }
        
        $html = array(); 
        //dd($this->Session->read('Auth.User.grantActions'));
        foreach ($itemsMenu as $itemMenu) {
            $html[] = "<li>";
            $html[] = $this->Html->link($itemMenu['nombreItem'], '#');
            if (!empty($itemMenu['subItems'])) {
                $html[] = " <ul>";
                foreach ($itemMenu['subItems'] as $subItem) {
                    if (verifyPrivileges($this->Session->read('Auth.User.grantActions'), $subItem['controller'], $subItem['action']) || $this->Session->read('Auth.User.group_id') == 1)                     {
                        $param = (!empty($subItem['param']))?$param = $subItem['param']: $param = '';
                        
                        $html[] = sprintf('<li> %s </li>', 
                                            $this->Html->link($subItem['nombre'], 
                                                                sprintf('/%s/%s/%s', 
                                                                        $subItem['controller'], 
                                                                        $subItem['action'], 
                                                                        $param
                                                                        )));                        
                    }
                }
                $html[] = " </ul>";
            }
            $html[] = "</li>";  
        }
        
    ?>
   
    <ul class="sf-menu" id="example">
        <?php
        
            echo implode("\n", $html);
        
        ?>
    </ul>