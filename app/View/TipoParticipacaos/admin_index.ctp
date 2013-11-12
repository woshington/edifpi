<div class="tipoParticipacaos index">
	<h2><?php echo __('Tipo Participacaos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idTipo_participacao'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('inicio_inscricao'); ?></th>
			<th><?php echo $this->Paginator->sort('fim_inscricao'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_participante_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoParticipacaos as $tipoParticipacao): ?>
	<tr>
		<td><?php echo h($tipoParticipacao['TipoParticipacao']['idTipo_participacao']); ?>&nbsp;</td>
		<td><?php echo h($tipoParticipacao['TipoParticipacao']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($tipoParticipacao['TipoParticipacao']['valor']); ?>&nbsp;</td>
		<td><?php echo h($tipoParticipacao['TipoParticipacao']['inicio_inscricao']); ?>&nbsp;</td>
		<td><?php echo h($tipoParticipacao['TipoParticipacao']['fim_inscricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tipoParticipacao['TipoParticipante']['descricao'], array('controller' => 'tipo_participantes', 'action' => 'view', $tipoParticipacao['TipoParticipante']['idTipo_participante'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipoParticipacao['TipoParticipacao']['idTipo_participacao'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipoParticipacao['TipoParticipacao']['idTipo_participacao'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $tipoParticipacao['TipoParticipacao']['idTipo_participacao']), null, __('Are you sure you want to delete # %s?', $tipoParticipacao['TipoParticipacao']['idTipo_participacao'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tipo Participacao'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Participantes'), array('controller' => 'tipo_participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participante'), array('controller' => 'tipo_participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('controller' => 'inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
