
<div class="participantes index">
	<h2><?php echo __('Participantes sem inscricao'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('cpf'); ?></th>
			<th><?php echo $this->Paginator->sort('nascimento'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>			
			<th><?php echo $this->Paginator->sort('instituicao_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($participantes as $participante): ?>
	<tr>
		<td><?php echo h($participante['Participante']['nome']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['cpf']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['nascimento']); ?>&nbsp;</td>
		<td><?php echo h($participante['Participante']['email']); ?>&nbsp;</td>
		<td>
			<?php echo $participante['Instituicao']['sigla'];?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Inscrever'), array('controller'=>'inscricaos', 'action' => 'add', 'admin'=>1, $participante['Participante']['id'])); ?>
			
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
		<li><?php echo $this->Html->link(__('Notificar'), array('action' => 'notificar','admin'=>1)); ?></li>		
	</ul>
</div>
