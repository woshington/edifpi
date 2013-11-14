<div class="tipoParticipacaoTipoAtividades form">
<?php echo $this->Form->create('TipoParticipacaoTipoAtividade'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Tipo Participacao Tipo Atividade'); ?></legend>
	<?php
		echo $this->Form->input('tipo_atividade_id');
		echo $this->Form->input('tipo_participacao_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Participacao Tipo Atividades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Atividades'), array('controller' => 'tipo_atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Atividade'), array('controller' => 'tipo_atividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipo Participacaos'), array('controller' => 'tipo_participacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participacao'), array('controller' => 'tipo_participacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
