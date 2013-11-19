<div class="tipoParticipantes view">
<h2><?php echo __('Tipo Participante'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoParticipante['TipoParticipante']['id']); ?>
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
		<li><?php echo $this->Html->link(__('Edit Tipo Participante'), array('action' => 'edit', $tipoParticipante['TipoParticipante']['id'])); ?> </li>		
		<li><?php echo $this->Html->link(__('List Tipo Participantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participante'), array('action' => 'add')); ?> </li>		
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Tipo Participacaos'); ?></h3>
	<?php if (!empty($tipoParticipante['TipoParticipacao'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Valor'); ?></th>
		<th><?php echo __('Inicio Inscricao'); ?></th>
		<th><?php echo __('Fim Inscricao'); ?></th>
		<th><?php echo __('Tipo Participante Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipoParticipante['TipoParticipacao'] as $tipoParticipacao): ?>
		<tr>
			<td><?php echo $tipoParticipacao['id']; ?></td>
			<td><?php echo $tipoParticipacao['descricao']; ?></td>
			<td><?php echo $tipoParticipacao['valor']; ?></td>
			<td><?php echo $tipoParticipacao['inicio_inscricao']; ?></td>
			<td><?php echo $tipoParticipacao['fim_inscricao']; ?></td>
			<td><?php echo $tipoParticipacao['tipo_participante_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tipo_participacaos', 'action' => 'view', $tipoParticipacao['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tipo_participacaos', 'action' => 'edit', $tipoParticipacao['id'])); ?>				
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		
	</div>
</div>
