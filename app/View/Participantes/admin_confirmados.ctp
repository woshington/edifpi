<div class="inscricaos index">
	<h2><?php echo __('Inscricaos confirmadas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<caption>
			<?=
				$this->Html->link('Imprimir', array(
					'controller'=>'participantes',
					'action'=>'imprimirConfirmados',					
					'admin'=>1
				),
				array(
					'target'=>'_blank'
				));
			?>
		</caption>
	<tr>
			<th><?php echo $this->Paginator->sort('data_inscricao'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_participacao_id'); ?></th>
			<th><?php echo $this->Paginator->sort('participante'); ?></th>
			<th><?php echo $this->Paginator->sort('pagamento'); ?></th>
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inscricaos as $inscricao): ?>
	<tr>
		<td><?php echo h($inscricao['Inscricao']['created']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['TipoParticipacao']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['Participante']['nome']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['Inscricao']['data_pagamento']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['TipoParticipacao']['valor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('controller'=>'inscricaos', 'action' => 'view', $inscricao['Inscricao']['id'])); ?>			
			<?php echo $this->Form->postLink(__('Extornar'), array('controller'=>'inscricaos', 'action' => 'extornar', $inscricao['Inscricao']['id'], 'admin'=>1), null, __('Extornar inscricao de # %s?', $inscricao['Participante']['nome'])); ?>
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
	<h3>Total: R$<?=$total[0]['Total']?></h3>
</div>
