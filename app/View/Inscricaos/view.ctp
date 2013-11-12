<div class="inscricaos view">
<h2><?php echo __('Inscricao'); ?></h2>
	<dl>
		<dt><?php echo __('Idinscricao'); ?></dt>
		<dd>
			<?php echo h($inscricao['Inscricao']['idinscricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Inscricao'); ?></dt>
		<dd>
			<?php echo h($inscricao['Inscricao']['data_inscricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($inscricao['Inscricao']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Pagamento'); ?></dt>
		<dd>
			<?php echo h($inscricao['Inscricao']['data_pagamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscricao['Participante']['nome'], array('controller' => 'participantes', 'action' => 'view', $inscricao['Participante']['idParticipante'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Participacao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscricao['TipoParticipacao']['descricao'], array('controller' => 'tipo_participacaos', 'action' => 'view', $inscricao['TipoParticipacao']['idTipo_participacao'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inscricao'), array('action' => 'edit', $inscricao['Inscricao']['idinscricao'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inscricao'), array('action' => 'delete', $inscricao['Inscricao']['idinscricao']), null, __('Are you sure you want to delete # %s?', $inscricao['Inscricao']['idinscricao'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Participacaos'), array('controller' => 'tipo_participacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participacao'), array('controller' => 'tipo_participacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades'), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade'), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Atividades'); ?></h3>
	<?php if (!empty($inscricao['Atividade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Idatividade'); ?></th>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Tipo Atividade Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($inscricao['Atividade'] as $atividade): ?>
		<tr>
			<td><?php echo $atividade['idatividade']; ?></td>
			<td><?php echo $atividade['titulo']; ?></td>
			<td><?php echo $atividade['descricao']; ?></td>
			<td><?php echo $atividade['tipo_atividade_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'atividades', 'action' => 'view', $atividade['idatividade'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'atividades', 'action' => 'edit', $atividade['idatividade'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'atividades', 'action' => 'delete', $atividade['idatividade']), null, __('Are you sure you want to delete # %s?', $atividade['idatividade'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Atividade'), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
