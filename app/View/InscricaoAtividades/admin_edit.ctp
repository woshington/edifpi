<div class="inscricaoAtividades form">
<?php echo $this->Form->create('InscricaoAtividade'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Inscricao Atividade'); ?></legend>
	<?php
		echo $this->Form->input('idInscricaoAtividade');
		echo $this->Form->input('inscricao_idinscricao');
		echo $this->Form->input('atividade_idatividade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('InscricaoAtividade.idInscricaoAtividade')), null, __('Are you sure you want to delete # %s?', $this->Form->value('InscricaoAtividade.idInscricaoAtividade'))); ?></li>
		<li><?php echo $this->Html->link(__('List Inscricao Atividades'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('controller' => 'inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Atividades'), array('controller' => 'atividades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Atividade'), array('controller' => 'atividades', 'action' => 'add')); ?> </li>
	</ul>
</div>
