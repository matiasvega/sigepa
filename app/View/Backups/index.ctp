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
                      "aaSorting": [[ 1, "desc" ]],
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

<div class="backupsIndex customIndex">
	<h2><?php echo __('Backups'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="tabla">
            <thead>
                <tr>
                    <!--<th>Id</th>-->
                    <th>Tag</th>
                    <th>Fecha</th>
                    <th>Filename</th>
                    <th>created</th>
                    <th>modified</th>
                    <th class="actions"><?php // echo __('Actions'); ?></th>
                </tr>
            </thead>
            <tbody>
	<?php foreach ($backups as $backup): ?>
	<tr>
		<!--<td><?php // echo h($backup['Backup']['id']); ?>&nbsp;</td>-->
		<td><?php echo h($backup['Backup']['tag']); ?>&nbsp;</td>
		<td><?php echo h(fecha($backup['Backup']['fecha'])); ?>&nbsp;</td>                
                <td> <?php echo $this->Html->link(h($backup['Backup']['filename']), array('action' => 'download', $backup['Backup']['filename'])); ?> </td>                                
		<td><?php echo h($backup['Backup']['created']); ?>&nbsp;</td>
		<td><?php echo h($backup['Backup']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php // echo $this->Html->link(__('View'), array('action' => 'view', $backup['Backup']['id'])); ?>
			<?php // echo $this->Html->link(__('Edit'), array('action' => 'edit', $backup['Backup']['id'])); ?>
			<?php // echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $backup['Backup']['id']), null, __('Are you sure you want to delete # %s?', $backup['Backup']['tag'])); ?>
                    
                    <?php echo $this->Form->postLink($this->Html->image('delete.png', array('alt' => 'Eliminar', 'title' => 'Eliminar')), array('action' => 'delete', $backup['Backup']['id']), array('escape' => false), __('Confirma que desea eliminar los datos del backup: %s?', $backup['Backup']['tag'])); ?>
                    
                    
		</td>
	</tr>
<?php endforeach; ?>
        </tbody>
	</table>

</div>

<div id="sidePanel">
    <div id="panelContent">
        <div class="acciones">
	<ul>
            <li><?php echo $this->Html->link(__('Alta de Obra Social'), array('action' => 'add')); ?></li>
            <li><?php echo $this->Html->link(__('Listado Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Registrar Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('Listado Profesionales'), array('controller' => 'profesionales', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Registrar Profesional'), array('controller' => 'profesionales', 'action' => 'add')); ?> </li>
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