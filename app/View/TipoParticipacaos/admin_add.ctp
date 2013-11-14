<script>
	jQuery(function($){
       $(".data").mask("99/99/9999");       
	});
</script>
<div class="tipoParticipacaos form">
<?php echo $this->Form->create('TipoParticipacao'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo Participacao'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('valor');
		echo $this->Form->input('inicio_inscricao', array('type'=>'text', 'class'=>'data'));
		echo $this->Form->input('fim_inscricao', array('type'=>'text', 'class'=>'data'));
		echo $this->Form->input('tipo_participante_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipo Participacaos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tipo Participantes'), array('controller' => 'tipo_participantes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo Participante'), array('controller' => 'tipo_participantes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Inscricaos'), array('controller' => 'inscricaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Inscricao'), array('controller' => 'inscricaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
