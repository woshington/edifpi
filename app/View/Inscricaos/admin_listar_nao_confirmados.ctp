<div class="inscricaos index">
	<h2><?php echo __('Inscricaos nao confirmadas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('data_inscricao'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_participacao_id'); ?></th>
			<th><?php echo $this->Paginator->sort('participante'); ?></th>			
			<th><?php echo $this->Paginator->sort('valor'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inscricaos as $inscricao): ?>
	<tr>
		<td><?php echo h($inscricao['Inscricao']['created']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['TipoParticipacao']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['Participante']['nome']); ?>&nbsp;</td>		
		<td><?php echo h($inscricao['TipoParticipacao']['valor']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('controller'=>'inscricaos', 'action' => 'view', $inscricao['Inscricao']['id'])); ?>			
			<?php echo $this->Form->postLink(__('Confirmar'), array('controller'=>'inscricaos', 'action' => 'confirmar', $inscricao['Inscricao']['id'], 'admin'=>1), null, __('Confirmar inscricao de # %s?', $inscricao['Participante']['nome'])); ?>
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
