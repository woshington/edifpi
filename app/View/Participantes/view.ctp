<div class="participantes view">
<h2><?php echo __('Participante'); ?></h2>
	<dl>
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
		<dt><?php echo __('Instituicao'); ?></dt>
		<dd>
			<?php echo $participante['Instituicao']['sigla']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Participante'), array('action' => 'edit')); ?> </li>		
	</ul>
</div>
