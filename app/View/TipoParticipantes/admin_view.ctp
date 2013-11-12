<div class="tipoParticipantes view">
<h2><?php echo __('Tipo Participante'); ?></h2>
	<dl>
		<dt><?php echo __('IdTipo Participante'); ?></dt>
		<dd>
			<?php echo h($tipoParticipante['TipoParticipante']['idTipo_participante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($tipoParticipante['TipoParticipante']['descricao']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Participante'), array('action' => 'edit', $tipoParticipante['TipoParticipante']['idTipo_participante'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Participante'), array('action' => 'delete', $tipoParticipante['TipoParticipante']['idTipo_participante']), null, __('Are you sure you want to delete # %s?', $tipoParticipante['TipoParticipante']['idTipo_participante'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Participantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Participacaos'), array('controller' => 'tipo_participacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participacao'), array('controller' => 'tipo_participacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tipo Participacaos'); ?></h3>
	<?php if (!empty($tipoParticipante['TipoParticipacao'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('IdTipo Participacao'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Inicio Inscricao'); ?></th>
		<th><?php echo __('Fim Inscricao'); ?></th>
		<th><?php echo __('Tipo Participante Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoParticipante['TipoParticipacao'] as $tipoParticipacao): ?>
		<tr>
			<td><?php echo $tipoParticipacao['idTipo_participacao']; ?></td>
			<td><?php echo $tipoParticipacao['descricao']; ?></td>
			<td><?php echo $tipoParticipacao['valor']; ?></td>
			<td><?php echo $tipoParticipacao['inicio_inscricao']; ?></td>
			<td><?php echo $tipoParticipacao['fim_inscricao']; ?></td>
			<td><?php echo $tipoParticipacao['tipo_participante_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tipo_participacaos', 'action' => 'view', $tipoParticipacao['idTipo_participacao'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tipo_participacaos', 'action' => 'edit', $tipoParticipacao['idTipo_participacao'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tipo_participacaos', 'action' => 'delete', $tipoParticipacao['idTipo_participacao']), null, __('Are you sure you want to delete # %s?', $tipoParticipacao['idTipo_participacao'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tipo Participacao'), array('controller' => 'tipo_participacaos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
