<?php 
        echo $this->Html->image('runBackup.png', array(     'title' => 'Backup', 
                                                            'class' => 'toolBarOption',
                                                            'alt' => 'Backup'
                                                            )
                                );

        echo $this->Html->image('configuration.png', array( 'title' => 'Preferencias', 
                                                            'class' => 'toolBarOption',
                                                            'alt' => 'Preferencias',
                                                            'url' => array( 'controller' => 'users', 
                                                                            'action' => 'options', 
                                                                            $this->Session->read('Auth.User.id'))
                                                            )
                                );

        echo $this->Html->image('logout.png', array(    'title' => 'Salir', 
                                                        'class' => 'toolBarOption',
                                                        'alt' => 'Salir',
                                                        'url' => array( 'controller' => 'users', 
                                                                        'action' => 'logout', 
                                                                    )
                                                   )
                                );                                                
?>  