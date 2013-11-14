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
			<?php echo $this->Html->link($tipoParticipacaoTipoAtividade['TipoAtividade']['descricao'], array('controller' => 'tipo_atividades', 'action' => 'view', $tipoParticipacaoTipoAtividade['TipoAtividade']['idTipo_atividade'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Participacao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tipoParticipacaoTipoAtividade['TipoParticipacao']['descricao'], array('controller' => 'tipo_participacaos', 'action' => 'view', $tipoParticipacaoTipoAtividade['TipoParticipacao']['idTipo_participacao'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Participacao Tipo Atividade'), array('action' => 'edit', $tipoParticipacaoTipoAtividade['TipoParticipacaoTipoAtividade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipo Participacao Tipo Atividade'), array('action' => 'delete', $tipoParticipacaoTipoAtividade['TipoParticipacaoTipoAtividade']['id']), null, __('Are you sure you want to delete # %s?', $tipoParticipacaoTipoAtividade['TipoParticipacaoTipoAtividade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Participacao Tipo Atividades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participacao Tipo Atividade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Atividades'), array('controller' => 'tipo_atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Atividade'), array('controller' => 'tipo_atividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Participacaos'), array('controller' => 'tipo_participacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participacao'), array('controller' => 'tipo_participacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
