<fieldset>
    <legend> Estudios Solicitados </legend>
    <div class="estudiosComplementariosIndex">
            <h2><?php // echo __('Estudios Complementarios'); ?></h2>
            <table cellpadding="0" cellspacing="0">
            <tr>
                            <th><?php echo $this->Paginator->sort('id'); ?></th>
                            <th><?php echo $this->Paginator->sort('nombre'); ?></th>
                            <th><?php echo $this->Paginator->sort('descripcion'); ?></th>
                            <th><?php echo $this->Paginator->sort('resultado'); ?></th>
                            <th><?php echo $this->Paginator->sort('adjunto'); ?></th>
                            <th><?php echo $this->Paginator->sort('fechaSolicitado'); ?></th>
                            <th><?php echo $this->Paginator->sort('fechaRealizado'); ?></th>
                            <th class="actions"><?php echo __('Actions'); ?></th>
            </tr>
            <?php foreach ($estudiosComplementarios as $estudiosComplementario): ?>
            <tr>
                    <td><?php echo h($estudiosComplementario['EstudiosComplementario']['id']); ?>&nbsp;</td>
                    <td><?php echo h($estudiosComplementario['EstudiosComplementario']['nombre']); ?>&nbsp;</td>
                    <td><?php echo h($estudiosComplementario['EstudiosComplementario']['descripcion']); ?>&nbsp;</td>
                    <td><?php echo h($estudiosComplementario['EstudiosComplementario']['resultado']); ?>&nbsp;</td>
                    <td><?php echo h($estudiosComplementario['EstudiosComplementario']['adjunto']); ?>&nbsp;</td>
                    <td><?php echo h($estudiosComplementario['EstudiosComplementario']['fechaSolicitado']); ?>&nbsp;</td>
                    <td><?php echo h($estudiosComplementario['EstudiosComplementario']['fechaRealizado']); ?>&nbsp;</td>
                    <td class="actions">
                            <?php echo $this->Html->link(__('View'), array('action' => 'view', $estudiosComplementario['EstudiosComplementario']['id'])); ?>
                            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $estudiosComplementario['EstudiosComplementario']['id'])); ?>
                            <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $estudiosComplementario['EstudiosComplementario']['id']), null, __('Are you sure you want to delete # %s?', $estudiosComplementario['EstudiosComplementario']['id'])); ?>
                    </td>
            </tr>
    <?php endforeach; ?>
            </table>
            <p>
            <?php
            echo $this->Paginator->counter(array(
            'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
            ));
            ?>	</p>
            <div class="paging">
            <?php
                    echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
                    echo $this->Paginator->numbers(array('separator' => ''));
                    echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
            ?>
            </div>
    </div>
</fieldset> 

<fieldset>
    <legend> Nuevo Estudio </legend>
</fieldset> 

<!--<div class="actions">
	<h3><?php // echo __('Actions'); ?></h3>
	<ul>
		<li><?php // echo $this->Html->link(__('New Estudios Complementario'), array('action' => 'add')); ?></li>
		<li><?php // echo $this->Html->link(__('List Pacientes'), array('controller' => 'pacientes', 'action' => 'index')); ?> </li>
		<li><?php // echo $this->Html->link(__('New Paciente'), array('controller' => 'pacientes', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
