<!--<script>
//    $(document).ready(function() {
//        $('form').h5Validate();
//    });
</script>-->
<div class="usersForm">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User', array(
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
        <legend><?php echo __('Sistema de Gestion de Pacientes'); ?></legend>
        <?php 
        echo $this->Form->input('username', array(
                                                    'label' => 'Usuario',
                                                    'required' => true,
                                                    'placeholder' => 'Ingresa tu nombre de usuario',
                                                    'title' => 'Ingresa tu nombre de usuario',
                                                    )
                                );
        echo $this->Form->input('password', array(
                                                    'label' => 'Contraseña',
                                                    'required' => true,
                                                    'placeholder' => 'Ingresa tu contraseña',
                                                    'title' => 'Ingresa tu contraseña',            
                                                    )
                                );
        
        echo $this->Html->tag(
                                        'div', 
                                        $this->Form->button('Ingresar', array(   
                                            'type' => 'submit',
                                            'value' => 'Ingresar',
                                            'class' => 'btn btn-lg btn-success',
                                        )), 
                                        array('id' => 'divBtn')
                        );
        
//        echo ;
        
    ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>