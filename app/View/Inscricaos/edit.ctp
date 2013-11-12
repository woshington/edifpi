<div class="inscricaos form">
<?php echo $this->Form->create('Inscricao'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inscricao'); ?></legend>
	<?php
		echo $this->Form->input('idinscricao');
		echo $this->Form->input('data_inscricao');
		echo $this->Form->input('status');
		echo $this->Form->input('data_pagamento');
		echo $this->Form->input('Participante_id');
		echo $this->Form->input('tipo_participacao_id');
		echo $this->Form->input('Atividade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Inscricao.idinscricao')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Inscricao.idinscricao'))); ?></li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('controller' => 'participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Participante'), array('controller' => 'participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Participacaos'), array('controller' => 'tipo_participacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participacao'), array('controller' => 'tipo_participacaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades'), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade'), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
