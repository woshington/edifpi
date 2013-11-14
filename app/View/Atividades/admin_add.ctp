<div class="atividades form">
<?php echo $this->Form->create('Atividade'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Atividade'); ?></legend>
	<?php
		echo $this->Form->input('titulo');
		echo $this->Form->input('descricao');
		echo $this->Form->input('tipo_atividade_id');		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Atividades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Atividades'), array('controller' => 'tipo_atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Atividade'), array('controller' => 'tipo_atividades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('controller' => 'inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
