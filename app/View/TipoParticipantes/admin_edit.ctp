<div class="tipoParticipantes form">
<?php echo $this->Form->create('TipoParticipante'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipo Participante'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	
</div>
