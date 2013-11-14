<div class="inscricaoAtividades view">
<h2><?php echo __('Inscricao Atividade'); ?></h2>
	<dl>
		<dt><?php echo __('IdInscricaoAtividade'); ?></dt>
		<dd>
			<?php echo h($inscricaoAtividade['InscricaoAtividade']['idInscricaoAtividade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Inscricao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscricaoAtividade['Inscricao']['idinscricao'], array('controller' => 'inscricaos', 'action' => 'view', $inscricaoAtividade['Inscricao']['idinscricao'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Atividade'); ?></dt>
		<dd>
			<?php echo $this->Html->link($inscricaoAtividade['Atividade']['descricao'], array('controller' => 'atividades', 'action' => 'view', $inscricaoAtividade['Atividade']['idatividade'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Inscricao Atividade'), array('action' => 'edit', $inscricaoAtividade['InscricaoAtividade']['idInscricaoAtividade'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Inscricao Atividade'), array('action' => 'delete', $inscricaoAtividade['InscricaoAtividade']['idInscricaoAtividade']), null, __('Are you sure you want to delete # %s?', $inscricaoAtividade['InscricaoAtividade']['idInscricaoAtividade'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricao Atividades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao Atividade'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('controller' => 'inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades'), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade'), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
