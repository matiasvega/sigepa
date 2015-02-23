<script type="text/javascript">

    jQuery(document).ready(function() {

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

        $('#group_id').bind('change', function() {
            console.log($(this).val());
            if ($(this).val() == 2) {
                $('#profesional_id').attr('disabled', false);
                $('#profesional_id').trigger('chosen:updated');
            } else {
                $('#profesional_id').attr('disabled', true);
                $('#profesional_id').trigger('chosen:updated');
            }
        });
        
    });

</script>

<div class="usersForm">
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
		<legend><?php echo __('Nuevo Usuario'); ?></legend>
	<?php
                echo $this->Form->input('username', array('label' => 'Usuario'));
		echo $this->Form->input('password', array('label' => 'Password'));
		echo $this->Form->input('group_id', array(
                                                    'label' => 'Grupo',
                                                    'id' => 'group_id',
                                                        )
                                        );

                echo $this->Form->input('profesional_id', array(
                                                    'id' => 'profesional_id',
                                                    'label' => 'Profesional',
                                                    'options' => $profesionales,
                                                    'empty' => 'Sin asignar',
                                                    'disabled' => true,
                                                                )
                                        );
                
                echo $this->Form->button('Guardar', array(   
                                            'type' => 'submit',
                                            'value' => 'Guardar',
                                            'class' => 'btn btn-lg btn-success'
                                        )
                        );
	?>
	</fieldset>
<?php echo $this->Form->end(); ?>
</div>


<div id="sidePanel">
    <div id="panelContent">
        <div class="acciones">
        <ul>
                    <li><?php echo $this->Html->link(__('Listado Usuarios'), array('action' => 'index')); ?></li>
                    <li><?php echo $this->Html->link(__('Listado Grupos'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>        
        </div>
    </div>
    <div id="panelHandle"><p>Acciones</p></div>
</div>


<style>
    
    .usersForm {
        margin-left:2%;
    }
    
</style>    