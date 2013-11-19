<div class="tipoParticipacaos index">
	<h2><?php echo __('Tipo Participacaos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th><?php echo $this->Paginator->sort('inicio_inscricao'); ?></th>
			<th><?php echo $this->Paginator->sort('fim_inscricao'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_participante_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoParticipacaos as $tipoParticipacao): ?>
	<tr>
		<td><?php echo h($tipoParticipacao['TipoParticipacao']['id']); ?>&nbsp;</td>
		<td><?php echo h($tipoParticipacao['TipoParticipacao']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($tipoParticipacao['TipoParticipacao']['valor']); ?>&nbsp;</td>
		<td><?php echo h($tipoParticipacao['TipoParticipacao']['inicio_inscricao']); ?>&nbsp;</td>
		<td><?php echo h($tipoParticipacao['TipoParticipacao']['fim_inscricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tipoParticipacao['TipoParticipante']['descricao'], array('controller' => 'tipo_participantes', 'action' => 'view', $tipoParticipacao['TipoParticipante']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipoParticipacao['TipoParticipacao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipoParticipacao['TipoParticipacao']['id'])); ?>
			
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
	
</div>
