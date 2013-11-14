<div class="tipoAtividades form">
<?php echo $this->Form->create('TipoAtividade'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Tipo Atividade'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('agrupar');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Atividades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Atividades'), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade'), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
