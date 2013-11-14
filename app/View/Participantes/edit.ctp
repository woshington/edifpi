<div class="participantes form">
<?php echo $this->Form->create('Participante'); ?>
	<fieldset>
		<legend><?php echo __('Edit Participante'); ?></legend>
	<?php
		echo $this->Form->input('idParticipante');
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf');
		echo $this->Form->input('nascimento');
		echo $this->Form->input('email');
		echo $this->Form->input('senha');
		echo $this->Form->input('instituicao_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Participante.idParticipante')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Participante.idParticipante'))); ?></li>
		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('controller' => 'instituicaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('controller' => 'instituicaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
