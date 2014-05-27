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
                                    "sUrl": "http://localhost/devel/sigepa/de_ES.txt"
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

<div class="profesionalesIndex customIndex">
	<h2><?php echo __('Profesionales'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="tabla">
        <thead>
            <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>apellido</th>
                            <th>matricula</th>
                            <th>fechaNacimiento</th>
                            <th>created</th>
                            <th>modified</th>
                            <th class="actions"><?php // echo __('Actions'); ?></th>
            </tr>
        <thead>
        <tbody>
	<?php foreach ($profesionales as $profesionale): ?>
	<tr>
		<td><?php echo h($profesionale['Profesionale']['id']); ?>&nbsp;</td>
		<td><?php echo h($profesionale['Profesionale']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($profesionale['Profesionale']['apellido']); ?>&nbsp;</td>
		<td><?php echo h($profesionale['Profesionale']['matricula']); ?>&nbsp;</td>
		<td><?php echo h($profesionale['Profesionale']['fechaNacimiento']); ?>&nbsp;</td>
		<td><?php echo h($profesionale['Profesionale']['created']); ?>&nbsp;</td>
		<td><?php echo h($profesionale['Profesionale']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $profesionale['Profesionale']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $profesionale['Profesionale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $profesionale['Profesionale']['id']), null, __('Are you sure you want to delete # %s?', $profesionale['Profesionale']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Registrar Profesional'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listado Especialidades'), array('controller' => 'especialidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Especialidad'), array('controller' => 'especialidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Listado Obras Sociales'), array('controller' => 'obras_sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Registrar Obra Social'), array('controller' => 'obras_sociales', 'action' => 'add')); ?> </li>
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