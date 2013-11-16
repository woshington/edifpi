<script>
	jQuery(function($){
       $("#cpf").mask("999.999.999-99");	       
       $("#data").mask("99/99/9999");	       
	});
</script>
<div class="participantes form">
<?php echo $this->Form->create('Participante'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Participante'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('cpf', array('id'=>'cpf'));				
		echo $this->Form->input('nascimento', array('id'=>'data', 'type'=>'text'));
		echo $this->Form->input('instituicao_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		
	</ul>
</div>
