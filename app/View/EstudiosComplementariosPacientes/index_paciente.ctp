<?php 
    $linkLocaleDataTable = $this->Html->url('/de_ES.txt', true);    

    $linkCargarResultado = $this->Html->url(array(
         "controller" => "estudios_complementarios_pacientes",
         "action" => "edit",
     ), true);
    
?>
<script type="text/javascript">

    $(document).ready(function() {
        $('#estudiosComplementariosPacientesIndex').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false,
            "aaSorting": [[ 0, "asc" ]],
            "bAutoWidth": false,
            "aoColumns": [
                { "sWidth": "15%" },
                { "sWidth": "8%" },
                { "sWidth": "8%"},
                { "sWidth": "15%"},
                { "sWidth": "7%"},
                { "sWidth": "5%"},
            ],            
            "sPaginationType": "full_numbers",
            "bJQueryUI": true,            
            "oLanguage": {
                                "sUrl": <?php echo sprintf("'%s'", $linkLocaleDataTable); ?> 
                                 }
        });
        
        $('.cargar_resultado').bind('click', function() {
//            console.log($(this).prop('id'));
            $('#editEstudio').load(<?php echo sprintf("'%s'", $linkCargarResultado); ?> + '/' + $(this).prop('id') + '/' + <?php echo $idPaciente; ?>);
            $('#editEstudio').dialog({
                                        modal: true,
                                        width: 790,
                                        height: 440,
                                        draggable: true,
                                        resizable: true,
                                        title: 'Cargar resultados de estudio',
                                        show: {
                                                effect: "blind",
                                                duration: 1000,
                                              },
                                        hide: {
                                          effect: "fade",
                                          duration: 500,
                                        }
                                    });
            
        });
        
        
    });

</script>

<?php // d($estudiosComplementariosPacientes); ?>

<div class="estudiosComplementariosPacientesIndex">
	<h2><?php // echo __('Estudios Complementarios Pacientes'); ?></h2>
	<table cellpadding="0" cellspacing="0" id="estudiosComplementariosPacientesIndex">
            <thead>
                <tr>
                    <!--<th>id</th>-->
                    <!--<th>pacientes_id</th>-->
                    <th> Estudio </th>
                    <th> Solicitado </th>
                    <th> Realizado </th>
                    <th> Resultado </th>
                    <th> Adjunto </th>
                    <th> &nbsp; </th>
<!--                    <th>created</th>
                    <th>modified</th>-->
                    <!--<th class="actions"><?php // echo __('Actions'); ?></th>-->
                </tr>
            </thead>
            <tbody>
                <!--nocache-->
	<?php foreach ($estudiosComplementariosPacientes as $estudiosComplementariosPaciente): ?>
	<tr>
		<!--<td><?php // echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id']); ?>&nbsp;</td>-->
<!--		<td>
			<?php // echo $this->Html->link($estudiosComplementariosPaciente['Paciente']['id'], array('controller' => 'pacientes', 'action' => 'view', $estudiosComplementariosPaciente['Paciente']['id'])); ?>
		</td>-->
		<td>
			<?php echo $estudiosComplementariosPaciente['EstudiosComplementario']['nombre']; ?>
		</td>
                <td>
			<?php echo fecha($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['fechaSolicitado']); ?>
		</td>
                <td>
			<?php
                            if (!empty($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['fechaRealizado'])) {
                                echo fecha($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['fechaRealizado']);
                            } else {
                                echo '&nbsp;';
                            }                                       
                        ?>
		</td>
                <td>
			<?php echo $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['resultado']; ?>
		</td>
                <td>
			<?php 

                                if ($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['adjunto']) {
                                   
                                    echo $this->Html->image("result_attachment.png", array(
                                        'id' => $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'], 
                                        'alt' => $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['adjunto'],
                                        'title' => $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['adjunto'],
                                        'url' => array('action' => 'download', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['adjunto'], str_replace(array('(', ')', '/', ' '), '-', $estudiosComplementariosPaciente['EstudiosComplementario']['nombre']), $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id']),
                                    ));
                                    
                                }
                        ?>
                    
		</td>                
<!--		<td><?php // echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['created']); ?>&nbsp;</td>
		<td><?php // echo h($estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['modified']); ?>&nbsp;</td>-->
		<td class="actions">
			<?php 
                                                        
                            echo $this->Html->image("add_result.png", array(
                                    'id' => $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'], 
                                    'class' => 'cargar_resultado',
                                    'alt' => 'Cargar resultado de estudio',
                                    'title' => 'Cargar resultado de estudio',
                                ));
                            
                            
                                    
                                    
                            
                            
                        ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'])); ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id']), null, __('Are you sure you want to delete # %s?', $estudiosComplementariosPaciente['EstudiosComplementariosPaciente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
        <!--/nocache-->
        </tbody>
	</table>
        
        
<!--	<p>
	<?php
//	echo $this->Paginator->counter(array(
//	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
//	));
	?>	</p>
	<div class="paging">
	<?php
//		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
//		echo $this->Paginator->numbers(array('separator' => ''));
//		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>-->
</div>


<!--<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>
		<li><?php // echo $this->Html->link(__('New Estudios Complementarios Paciente'), array('action' => 'add')); ?></li>
		<li><?php // echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
		<li><?php // echo $this->Html->link(__('List Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Estudios Complementarios'), array('controller' => 'estudios_complementarios', 'action' => 'add')); ?> </li>
	</ul>
</div>-->



<style>
    input, textarea {
        clear: both;
        font-size: 100%;
        font-family: "frutiger linotype", "lucida grande", "verdana", sans-serif;
        width: 50%;
    }
    
    .ui-buttonset .ui-button {
        margin-left: 0;
        margin-right: -.1em;
    }
</style>