<div class="tipoAtividades form">
<?php echo $this->Form->create('TipoAtividade'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Tipo Atividade'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descricao');
		echo $this->Form->input('agrupar');
		echo $this->Form->input('max', array('label'=>'Maximo de participantes'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	
</div>
