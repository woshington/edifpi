<div class="tipoAtividades form">
<?php echo $this->Form->create('TipoAtividade'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Tipo Atividade'); ?></legend>
	<?php
		echo $this->Form->input('idTipo_atividade');
		echo $this->Form->input('descricao');
		echo $this->Form->input('agrupar');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('TipoAtividade.idTipo_atividade')), null, __('Are you sure you want to delete # %s?', $this->Form->value('TipoAtividade.idTipo_atividade'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Atividades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Atividades'), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade'), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
