<div class="inscricaoAtividades index">
	<h2><?php echo __('Inscricao Atividades'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('idInscricaoAtividade'); ?></th>
			<th><?php echo $this->Paginator->sort('inscricao_idinscricao'); ?></th>
			<th><?php echo $this->Paginator->sort('atividade_idatividade'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inscricaoAtividades as $inscricaoAtividade): ?>
	<tr>
		<td><?php echo h($inscricaoAtividade['InscricaoAtividade']['idInscricaoAtividade']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($inscricaoAtividade['Inscricao']['idinscricao'], array('controller' => 'inscricaos', 'action' => 'view', $inscricaoAtividade['Inscricao']['idinscricao'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($inscricaoAtividade['Atividade']['descricao'], array('controller' => 'atividades', 'action' => 'view', $inscricaoAtividade['Atividade']['idatividade'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $inscricaoAtividade['InscricaoAtividade']['idInscricaoAtividade'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $inscricaoAtividade['InscricaoAtividade']['idInscricaoAtividade'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $inscricaoAtividade['InscricaoAtividade']['idInscricaoAtividade']), null, __('Are you sure you want to delete # %s?', $inscricaoAtividade['InscricaoAtividade']['idInscricaoAtividade'])); ?>
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
		<li><?php echo $this->Html->link(__('New Inscricao Atividade'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('controller' => 'inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades'), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade'), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
