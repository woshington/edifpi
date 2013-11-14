<?php echo $this->Html->script('views/inscricao/listar_atividades.js'); ?>
<div class="inscricaos form">
<?php echo $this->Form->create('Inscricao'); ?>
	<fieldset>
		<legend><?php echo __('Add Inscricao'); ?></legend>
	<?php		
		echo $this->Form->input('tipo_participacao_id', array('id'=>'tipoParticipacao'));
		foreach ($agrupados as $descricao=>$especificacao) {
			echo $this->Form->label($descricao);
		}		
		echo $this->Form->input('Atividade', array('type'=>'select', array('id'=>'atividades')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">	
</div>
