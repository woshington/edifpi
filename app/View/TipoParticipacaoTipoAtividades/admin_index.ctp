<div class="tipoParticipacaoTipoAtividades index">
	<h2><?php echo __('Tipo Participacao Tipo Atividades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_atividade_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_participacao_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoParticipacaoTipoAtividades as $tipoParticipacaoTipoAtividade): ?>
	<tr>
		<td><?php echo h($tipoParticipacaoTipoAtividade['TipoParticipacaoTipoAtividade']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tipoParticipacaoTipoAtividade['TipoAtividade']['descricao'], array('controller' => 'tipo_atividades', 'action' => 'view', $tipoParticipacaoTipoAtividade['TipoAtividade']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tipoParticipacaoTipoAtividade['TipoParticipacao']['descricao'], array('controller' => 'tipo_participacaos', 'action' => 'view', $tipoParticipacaoTipoAtividade['TipoParticipacao']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $tipoParticipacaoTipoAtividade['TipoParticipacaoTipoAtividade']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $tipoParticipacaoTipoAtividade['TipoParticipacaoTipoAtividade']['id'])); ?>	
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
