<div class="participantes form">
<?php echo $this->Form->create('Participante'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Participante'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('controller' => 'instituicaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('controller' => 'instituicaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
