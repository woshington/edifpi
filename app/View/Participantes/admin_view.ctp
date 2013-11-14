<div class="participantes view">
<h2><?php echo __('Participante'); ?></h2>
	<dl>
		<dt><?php echo __('IdParticipante'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['idParticipante']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cpf'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['cpf']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nascimento'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['nascimento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Senha'); ?></dt>
		<dd>
			<?php echo h($participante['Participante']['senha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Instituicao'); ?></dt>
		<dd>
			<?php echo $this->Html->link($participante['Instituicao']['sigla'], array('controller' => 'instituicaos', 'action' => 'view', $participante['Instituicao']['idInstituicao'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participante'), array('action' => 'edit', $participante['Participante']['idParticipante'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Participante'), array('action' => 'delete', $participante['Participante']['idParticipante']), null, __('Are you sure you want to delete # %s?', $participante['Participante']['idParticipante'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('controller' => 'instituicaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('controller' => 'instituicaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
