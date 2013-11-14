<div class="inscricaos view">
<h2><?php echo __('Inscricao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($inscricao['Inscricao']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Inscricao'); ?></dt>
		<dd>
			<?php echo h($inscricao['Inscricao']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($inscricao['Inscricao']['status']==true ? 'Confirmado' : 'Não Confirmado'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data Pagamento'); ?></dt>
		<dd>
			<?php echo h($inscricao['Inscricao']['data_pagamento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Participante'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscricao['Participante']['nome'], array('controller' => 'participantes', 'action' => 'view', $inscricao['Participante']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Participacao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscricao['TipoParticipacao']['descricao'], array('controller' => 'tipo_participacaos', 'action' => 'view', $inscricao['TipoParticipacao']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	
</div>
<div class="related">
	<h3><?php echo __('Related Atividades'); ?></h3>
	<?php if (!empty($inscricao['Atividade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Titulo'); ?></th>
		<th><?php echo __('Descricao'); ?></th>		
	</tr>
	<?php foreach ($inscricao['Atividade'] as $atividade): ?>
		<tr>
			<td><?php echo $atividade['titulo']; ?></td>
			<td><?php echo $atividade['descricao']; ?></td>			
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
	<div class="actions">		
	</div>
</div>
