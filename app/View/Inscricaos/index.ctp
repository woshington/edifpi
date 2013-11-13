<div class="inscricaos index">
	<h2><?php echo __('Inscricaos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idinscricao'); ?></th>
			<th><?php echo $this->Paginator->sort('data_inscricao'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>			
			<th><?php echo $this->Paginator->sort('tipo_participacao_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inscricaos as $inscricao): ?>
	<tr>
		<td><?php echo h($inscricao['Inscricao']['idinscricao']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['Inscricao']['data_inscricao']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['Inscricao']['status']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['TipoParticipacao']['descricao']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inscricao['Inscricao']['idinscricao'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inscricao['Inscricao']['idinscricao'])); ?>			
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
