<div class="atividades view">
<h2><?php echo __('Atividade'); ?></h2>
	<dl>
		<dt><?php echo __('Idatividade'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['idatividade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titulo'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['titulo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($atividade['Atividade']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Atividade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($atividade['TipoAtividade']['descricao'], array('controller' => 'tipo_atividades', 'action' => 'view', $atividade['TipoAtividade']['idTipo_atividade'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Atividade'), array('action' => 'edit', $atividade['Atividade']['idatividade'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Atividade'), array('action' => 'delete', $atividade['Atividade']['idatividade']), null, __('Are you sure you want to delete # %s?', $atividade['Atividade']['idatividade'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Atividades'), array('controller' => 'tipo_atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Atividade'), array('controller' => 'tipo_atividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('controller' => 'inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inscricaos'); ?></h3>
	<?php if (!empty($atividade['Inscricao'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Idinscricao'); ?></th>
		<th><?php echo __('Data Inscricao'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Data Pagamento'); ?></th>
		<th><?php echo __('Participante Id'); ?></th>
		<th><?php echo __('Tipo Participacao Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($atividade['Inscricao'] as $inscricao): ?>
		<tr>
			<td><?php echo $inscricao['idinscricao']; ?></td>
			<td><?php echo $inscricao['data_inscricao']; ?></td>
			<td><?php echo $inscricao['status']; ?></td>
			<td><?php echo $inscricao['data_pagamento']; ?></td>
			<td><?php echo $inscricao['Participante_id']; ?></td>
			<td><?php echo $inscricao['tipo_participacao_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'inscricaos', 'action' => 'view', $inscricao['idinscricao'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'inscricaos', 'action' => 'edit', $inscricao['idinscricao'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'inscricaos', 'action' => 'delete', $inscricao['idinscricao']), null, __('Are you sure you want to delete # %s?', $inscricao['idinscricao'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
