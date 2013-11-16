<div class="container form-centro">
<?php echo $this->Session->flash('flash'); ?>
	<div class="box-login">
		    <?=$this->Form->create('Participante')?>		    
			<h2 class="form-centro-heading">&nbsp;</h2>
			<input type="text" name="data[Participante][email]" class="input-block-level" placeholder="Seu email">
			<input type="password" name="data[Participante][senha]" class="input-block-level" placeholder="Sua senha">
			<button class="btn btn-large btn-primary btn-block" type="submit">Logar</button>			
			<?php 
				echo $this->Html->link('Cadastre-se', array(
					'controller'=>'participantes','action'=>'add','admin'=>0
				), array('class'=>'btn btn-large btn-primary btn-block'));
			?>			
			<?php 
				echo $this->Html->link('esqueci a senha', array(
					'controller'=>'participantes','action'=>'esqueci','admin'=>0
				), array('class'=>'btn btn-large btn-primary btn-block'));
			?>			
		<?=$this->Form->end()?>
	</div>
</div>