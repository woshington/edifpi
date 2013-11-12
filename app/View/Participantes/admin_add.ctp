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
		echo $this->Form->input('admin', array('type'=>'checkbox', 'label'=>'admin ?'));
		echo $this->Form->input('status', array('type'=>'checkbox', 'label'=>'ativar ?'));
		echo $this->Form->input('instituicao_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Participantes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Instituicaos'), array('controller' => 'instituicaos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instituicao'), array('controller' => 'instituicaos', 'action' => 'add')); ?> </li>
	</ul>
</div>
