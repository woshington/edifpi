<div class="atividades index">
	<h2><?php echo __('Atividades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idatividade'); ?></th>
			<th><?php echo $this->Paginator->sort('titulo'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_atividade_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($atividades as $atividade): ?>
	<tr>
		<td><?php echo h($atividade['Atividade']['idatividade']); ?>&nbsp;</td>
		<td><?php echo h($atividade['Atividade']['titulo']); ?>&nbsp;</td>
		<td><?php echo h($atividade['Atividade']['descricao']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($atividade['TipoAtividade']['descricao'], array('controller' => 'tipo_atividades', 'action' => 'view', $atividade['TipoAtividade']['idTipo_atividade'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $atividade['Atividade']['idatividade'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $atividade['Atividade']['idatividade'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $atividade['Atividade']['idatividade']), null, __('Are you sure you want to delete # %s?', $atividade['Atividade']['idatividade'])); ?>
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
		<li><?php echo $this->Html->link(__('New Atividade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Atividades'), array('controller' => 'tipo_atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Atividade'), array('controller' => 'tipo_atividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('controller' => 'inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
