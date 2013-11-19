<div class="tipoParticipacaos view">
<h2><?php echo __('Tipo Participacao'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipoParticipacao['TipoParticipacao']['id']); ?>
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
			<?php echo $this->Html->link($tipoParticipacao['TipoParticipante']['descricao'], array('controller' => 'tipo_participantes', 'action' => 'view', $tipoParticipacao['TipoParticipante']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipo Participacao'), array('action' => 'edit', $tipoParticipacao['TipoParticipacao']['id'])); ?> </li>		
	</ul>
</div>
<div class="related">
	
</div>
