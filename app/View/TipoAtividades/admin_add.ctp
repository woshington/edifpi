<div class="tipoAtividades form">
<?php echo $this->Form->create('TipoAtividade'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Tipo Atividade'); ?></legend>
	<?php
		echo $this->Form->input('descricao');
		echo $this->Form->input('agrupar');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	
</div>
