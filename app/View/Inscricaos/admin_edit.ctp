<style type="text/css">
	#agrupados {
		font-weight: bold;
		font-size: 20pt;
	}
</style>
<?php echo $this->Html->script('views/inscricao/admin_listar_atividades.js'); ?>
<div class="inscricaos form">
<?php echo $this->Form->create('Inscricao'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Inscricao'); ?></legend>
	<?php		
		echo $this->Form->input('id');
		echo $this->Form->input('tipo_participacao_id', array(
			'id'=>'tipoParticipacao',
			'empty'=>'---- Selecione um tipo de participacao ----'
		));						
		echo $this->Form->input('Atividade', array(
			'type'=>'select', 			
			'id'=>'atividades',
		));
		echo $this->Form->input('Atividade.atividade2', array(
			'type'=>'select', 			
			'id'=>'atividades2',
		));
	?>
	<ul id='agrupados'></ul>
	</fieldset>
<?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">	
</div>
