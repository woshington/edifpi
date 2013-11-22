<div class="container form-centro">
<?php echo $this->Session->flash('flash'); ?>
	<div class="box-login">
		    <?=$this->Form->create('Participante')?>		    
			<h2 class="form-centro-heading">&nbsp;</h2>
			<input type="text" name="data[Participante][email]" class="input-block-level" placeholder="Seu email">
			<input type="password" name="data[Participante][cpf]" class="input-block-level" placeholder="CPF">
			<button class="btn btn-large btn-primary btn-block" type="submit">Logar</button>			
		<?=$this->Form->end()?>
	</div>
</div>