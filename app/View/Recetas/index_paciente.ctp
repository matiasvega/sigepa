<?php 
    $linkLocaleDataTable = $this->Html->url('/de_ES.txt', true);    

?>
<script type="text/javascript">

    $(document).ready(function() {
        $('#recetasIndex').dataTable({
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
        
    });

</script>

<div class="recetasIndex">
	<!--<h2><?php // d($diagnosticos);// echo __('Diagnosticos'); ?></h2>-->
	<table cellpadding="0" cellspacing="0" id="recetasIndex">
            <thead>
                <tr>
                    <!--<th> id </th>-->
                    <th> Fecha </th>
                    <th> Medicamento </th>
                    <th> Observaciones </th>                    
                    <!--<th class="actions"><?php // echo __('Actions'); ?></th>-->
                </tr>
            </thead>
        <tbody>
            <!--nocache-->
	<?php foreach ($recetas as $receta): ?>
	<tr>
		<!--<td><?php // echo h($receta['Receta']['id']); ?>&nbsp;</td>-->
                <td><?php echo fecha(h($receta['Receta']['created'])); ?>&nbsp;</td>                
		<td><?php echo h($receta['Medicamento']['nombre_comercial']); ?>&nbsp;</td>
		<td><?php echo h($receta['Receta']['observaciones']); ?>&nbsp;</td>

		
		<!--<td><?php // echo fecha(h($diagnostico['Receta']['modified'])); ?>&nbsp;</td>-->
		<!--<td class="actions">-->
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $diagnostico['Diagnostico']['id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $diagnostico['Diagnostico']['id'])); 
                        
//                            echo $this->Html->image("add_result.png", array(
//                                    'id' => $diagnostico['Diagnostico']['id'], 
//                                    'class' => 'cargar_diagnostico',
//                                    'alt' => 'Cargar diagnostico definitivo',
//                                    'title' => 'Cargar diagnostico definitivo',
//                                ));
                        
                        
                        ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $diagnostico['Diagnostico']['id']), null, __('Are you sure you want to delete # %s?', $diagnostico['Diagnostico']['id'])); ?>
		<!--</td>-->
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
