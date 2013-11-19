<div class="tipoParticipacaos form">
<?php echo $this->Form->create('TipoParticipacao'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Participacao'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('valor');
		echo $this->Form->input('inicio_inscricao');
		echo $this->Form->input('fim_inscricao');
		echo $this->Form->input('tipo_participante_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">

</div>
