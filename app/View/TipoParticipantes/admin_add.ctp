<div class="tipoParticipantes form">
<?php echo $this->Form->create('TipoParticipante'); ?>
	<fieldset>
		<legend><?php echo __('Add Tipo Participante'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">

</div>
