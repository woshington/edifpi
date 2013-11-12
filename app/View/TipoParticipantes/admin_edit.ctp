<div class="tipoParticipantes form">
<?php echo $this->Form->create('TipoParticipante'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Participante'); ?></legend>
	<?php
		echo $this->Form->input('idTipo_participante');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TipoParticipante.idTipo_participante')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TipoParticipante.idTipo_participante'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Participantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Participacaos'), array('controller' => 'tipo_participacaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participacao'), array('controller' => 'tipo_participacaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
