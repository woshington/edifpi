<div class="tipoParticipacaoTipoAtividades form">
<?php echo $this->Form->create('TipoParticipacaoTipoAtividade'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Tipo Participacao Tipo Atividade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo_atividade_id');
		echo $this->Form->input('tipo_participacao_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">

</div>
