<div class="inscricaos form">
<?php echo $this->Form->create('Inscricao'); ?>
	<fieldset>
		<legend><?php echo __('Edit Inscricao'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('tipo_participacao_id');
		echo $this->Form->input('Atividade');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	
</div>
