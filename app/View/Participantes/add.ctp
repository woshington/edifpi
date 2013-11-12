<script>
	jQuery(function($){
       $("#data").mask("99/99/9999");
       $("#cpf").mask("999.999.999-99");	       
	});
</script>
<div class="participantes form">
<?php echo $this->Form->create('Participante'); ?>
	<fieldset>
		<legend><?php echo __('Add Participante'); ?></legend>
	<?php
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf', array('id'=>'cpf'));
		echo $this->Form->input('nascimento', array('type'=>'text', 'id'=>'data'));
		echo $this->Form->input('email');
		echo $this->Form->input('senha', array('type'=>'password'));
		echo $this->Form->input('confirmacaoSenha', array('type'=>'password'));
		echo $this->Form->input('instituicao_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	
</div>
