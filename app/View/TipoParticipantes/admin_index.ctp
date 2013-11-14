<div class="tipoParticipantes index">
	<h2><?php echo __('Tipo Participantes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idTipo_participante'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoParticipantes as $tipoParticipante): ?>
	<tr>
		<td><?php echo h($tipoParticipante['TipoParticipante']['idTipo_participante']); ?>&nbsp;</td>
		<td><?php echo h($tipoParticipante['TipoParticipante']['descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipoParticipante['TipoParticipante']['idTipo_participante'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipoParticipante['TipoParticipante']['idTipo_participante'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipoParticipante['TipoParticipante']['idTipo_participante']), null, __('Are you sure you want to delete # %s?', $tipoParticipante['TipoParticipante']['idTipo_participante'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Tipo Participante'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Participacaos'), array('controller' => 'tipo_participacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participacao'), array('controller' => 'tipo_participacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
