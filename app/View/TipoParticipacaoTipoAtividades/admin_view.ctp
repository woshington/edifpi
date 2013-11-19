<div class="tipoParticipacaoTipoAtividades view">
<h2><?php echo __('Tipo Participacao Tipo Atividade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoParticipacaoTipoAtividade['TipoParticipacaoTipoAtividade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Atividade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tipoParticipacaoTipoAtividade['TipoAtividade']['descricao'], array('controller' => 'tipo_atividades', 'action' => 'view', $tipoParticipacaoTipoAtividade['TipoAtividade']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Participacao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tipoParticipacaoTipoAtividade['TipoParticipacao']['descricao'], array('controller' => 'tipo_participacaos', 'action' => 'view', $tipoParticipacaoTipoAtividade['TipoParticipacao']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Participacao Tipo Atividade'), array('action' => 'edit', $tipoParticipacaoTipoAtividade['TipoParticipacaoTipoAtividade']['id'])); ?> </li>		
	</ul>
</div>
