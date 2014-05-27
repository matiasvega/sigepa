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

<div class="usersIndex customIndex">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0"  class="tabla">
        <thead>
            <tr>
                            <!--<th>id</th>-->
                            <th>Usuario</th>
                            <th>Password</th>
                            <th>Grupo</th>
                            <th>Creado</th>
                            <th>Modificado</th>
                            <th class="actions"><?php // echo __('Actions'); ?></th>
            </tr>
        </thead>
        <tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<!--<td><?php // echo h($user['User']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td>
			<?php // echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id']));
                            echo h($user['Group']['name']);
                        ?>
		</td>
		<td><?php echo h(fecha($user['User']['created'])); ?>&nbsp;</td>
		<td><?php echo h(fecha($user['User']['modified'])); ?>&nbsp;</td>
		<td class="actions">
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
                    
                        <?php echo $this->Html->link($this->Html->image('edit.png', array('alt' => 'Editar', 'title' => 'Editar')), array('action' => 'edit', $user['User']['id']), array('escape' => false)); ?>
                            
                        <?php echo $this->Form->postLink($this->Html->image('delete.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'delete', $user['User']['id']), array('escape' => false), __('Confirma que desea eliminar los datos del usuario %s?', $user['User']['username'])); ?>
                                                           
		</td>
	</tr>
<?php endforeach; ?>
        </tbody>
	</table>
	
<!--        <p>
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
                    <li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?></li>
                    <li><?php echo $this->Html->link(__('Listado Grupos'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
                    <li><?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
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
