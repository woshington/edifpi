<div class="tipoParticipacaos view">
<h2><?php echo __('Tipo Participacao'); ?></h2>
	<dl>
		<dt><?php echo __('IdTipo Participacao'); ?></dt>
		<dd>
			<?php echo h($tipoParticipacao['TipoParticipacao']['idTipo_participacao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tipoParticipacao['TipoParticipacao']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Valor'); ?></dt>
		<dd>
			<?php echo h($tipoParticipacao['TipoParticipacao']['valor']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inicio Inscricao'); ?></dt>
		<dd>
			<?php echo h($tipoParticipacao['TipoParticipacao']['inicio_inscricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fim Inscricao'); ?></dt>
		<dd>
			<?php echo h($tipoParticipacao['TipoParticipacao']['fim_inscricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Participante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tipoParticipacao['TipoParticipante']['descricao'], array('controller' => 'tipo_participantes', 'action' => 'view', $tipoParticipacao['TipoParticipante']['idTipo_participante'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Participacao'), array('action' => 'edit', $tipoParticipacao['TipoParticipacao']['idTipo_participacao'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Participacao'), array('action' => 'delete', $tipoParticipacao['TipoParticipacao']['idTipo_participacao']), null, __('Are you sure you want to delete # %s?', $tipoParticipacao['TipoParticipacao']['idTipo_participacao'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Participacaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participacao'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Participantes'), array('controller' => 'tipo_participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participante'), array('controller' => 'tipo_participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('controller' => 'inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Inscricaos'); ?></h3>
	<?php if (!empty($tipoParticipacao['Inscricao'])): ?>
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
	<?php foreach ($tipoParticipacao['Inscricao'] as $inscricao): ?>
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
