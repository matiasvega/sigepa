<?php 
    $linkLocaleDataTable = $this->Html->url('/de_ES.txt', true);    

    $linkCargarDiagnostico = $this->Html->url(array(
         "controller" => "diagnosticos",
         "action" => "edit",
     ), true);
    
?>
<script type="text/javascript">

    $(document).ready(function() {
        $('#diagnosticosIndex').dataTable({
            "bPaginate": true,
            "bLengthChange": false,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false,
            "aaSorting": [[ 0, "asc" ]],
            "sPaginationType": "full_numbers",
            "bJQueryUI": true,
            "oLanguage": {
                              "sUrl": <?php echo sprintf("'%s'", $linkLocaleDataTable); ?> 
                                 }
        });
                
        $('.cargar_diagnostico').bind('click', function() {
//            console.log($(this).prop('id'));
            $('#editDiagnostico').load(<?php echo sprintf("'%s'", $linkCargarDiagnostico); ?> + '/' + $(this).prop('id') + '/' + <?php echo $idPaciente; ?>);
            $('#editDiagnostico').dialog({
                                        modal: true,
                                        width: 790,
                                        height: 440,
                                        draggable: true,
                                        resizable: true,
                                        title: 'Cargar diagnostico definitivo',
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

<div class="diagnosticosIndex">
	<!--<h2><?php // d($diagnosticos);// echo __('Diagnosticos'); ?></h2>-->
	<table cellpadding="0" cellspacing="0" id="diagnosticosIndex">
            <thead>
                <tr>
                    <!--<th> id </th>-->
                    <!--<th> Fecha </th>-->
                    <th> Diagnostico Presuntivo </th>
                    <!--<th>pacientes_id</th>-->
                    <th> Diagnostico Definitivo </th>
                    <th> Patologia </th>
                    <!--<th> Creado </th>-->
                    <th> Modificado </th>
                    <th class="actions"><?php // echo __('Actions'); ?></th>
                </tr>
            </thead>
        <tbody>
            <!--nocache-->
	<?php foreach ($diagnosticos as $diagnostico): ?>
	<tr>
		<!--<td><?php // echo h($diagnostico['Diagnostico']['id']); ?>&nbsp;</td>-->
		<!--<td><?php // echo h($diagnostico['Diagnostico']['created']); ?>&nbsp;</td>-->
		<td><?php echo h($diagnostico['Diagnostico']['diagnostico_presuntivo']); ?>&nbsp;</td>
<!--		<td>
			<?php // echo $this->Html->link($diagnostico['Pacientes']['id'], array('controller' => 'pacientes', 'action' => 'view', $diagnostico['Pacientes']['id'])); ?>
		</td>-->
		<td><?php echo h($diagnostico['Diagnostico']['diagnostico_definitivo']); ?>&nbsp;</td>
                <td><?php echo h($diagnostico['Patologias']['nombre']); ?>&nbsp;</td>
		<!--<td><?php // echo fecha(h($diagnostico['Diagnostico']['created'])); ?>&nbsp;</td>-->
		<td><?php echo fecha(h($diagnostico['Diagnostico']['modified'])); ?>&nbsp;</td>
		<td class="actions">
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $diagnostico['Diagnostico']['id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $diagnostico['Diagnostico']['id'])); 
                        
                            echo $this->Html->image("add_result.png", array(
                                    'id' => $diagnostico['Diagnostico']['id'], 
                                    'class' => 'cargar_diagnostico',
                                    'alt' => 'Cargar diagnostico definitivo',
                                    'title' => 'Cargar diagnostico definitivo',
                                ));
                        
                        
                        ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $diagnostico['Diagnostico']['id']), null, __('Are you sure you want to delete # %s?', $diagnostico['Diagnostico']['id'])); ?>
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
		<li><?php // echo $this->Html->link(__('New Diagnostico'), array('action' => 'add')); ?></li>
		<li><?php // echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Pacientes'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
