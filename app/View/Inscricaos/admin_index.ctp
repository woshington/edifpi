<div class="inscricaos index">
	<h2><?php echo __('Inscricaos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('data_inscricao'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>			
			<th><?php echo $this->Paginator->sort('tipo_participacao_id'); ?></th>
			<th><?php echo $this->Paginator->sort('participante'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inscricaos as $inscricao): ?>
	<tr>
		<td><?php echo h($inscricao['Inscricao']['id']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['Inscricao']['created']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['Inscricao']['status']==true ? 'Confirmado': 'Não Confirmado'); ?>&nbsp;</td>
		<td><?php echo h($inscricao['TipoParticipacao']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($inscricao['Participante']['nome']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inscricao['Inscricao']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inscricao['Inscricao']['id'])); ?>			
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
	<ul>
		<?php if(!$inscricaos):?>
			<h3><?php echo __('Actions'); ?></h3>
			<li><?php echo $this->Html->link(__('Inscrever-se'), array('action' => 'add', 'admin'=>0)); ?></li>
		<?php endif;?>
		
	</ul>
</div>
