<?php 
    $linkLocaleDataTable = $this->Html->url('/de_ES.txt', true);        
?>
<script type="text/javascript">
        jQuery(document).ready(function() { 
            
                jQuery('.tabla').dataTable({
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

<div class="especialidadesIndex customIndex">
	<h2><?php echo __('Especialidades'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="tabla">
            <thead>
	<tr>
			<th>Id</th>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Created</th>
			<th>Modified</th>
			<th class="actions"><?php // echo __('Actions'); ?></th>
	</tr>
        </thead>
        <tbody>
	<?php foreach ($especialidades as $especialidade): ?>
	<tr>
		<td><?php echo h($especialidade['Especialidade']['id']); ?>&nbsp;</td>
		<td><?php echo h($especialidade['Especialidade']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($especialidade['Especialidade']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($especialidade['Especialidade']['created']); ?>&nbsp;</td>
		<td><?php echo h($especialidade['Especialidade']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $especialidade['Especialidade']['id'])); ?>                    			
                    
                        <?php echo $this->Html->link($this->Html->image('edit.png', array('alt' => 'Editar', 'title' => 'Editar')), array('action' => 'edit', $especialidade['Especialidade']['id']), array('escape' => false)); ?>
                            
                        <?php echo $this->Form->postLink($this->Html->image('delete.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'delete', $especialidade['Especialidade']['id']), array('escape' => false), __('Confirma que desea eliminar los datos de la especialidad %s?', $especialidade['Especialidade']['nombre'])); ?>
                    
                    
		</td>
	</tr>
<?php endforeach; ?>
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

<div id="sidePanel">
    <div id="panelContent">
        <div class="acciones">
	<ul>
            <li><?php echo $this->Html->link(__('Registrar Especialidad'), array('action' => 'add')); ?></li>
        </ul>
        </div>
    </div>
    <div id="panelHandle"><p>Acciones</p></div>
</div>

<style>
    .customIndex {
        margin-left:2%;
    }   
    
    label {
        width: 100%;        
    }
        
    input, textarea {
        clear: both;
        font-size: 90%;
        font-family: "frutiger linotype", "lucida grande", "verdana", sans-serif;
        width: 40%;
    }
    
    label input {
        height: 40px;
    }
        
            
</style>    