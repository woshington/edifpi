<script>
	function mudaParticipante(participantes) {	  
		alert(participantes);
		$.each(participantes, function() {
		    $.each(this, function(index, value) {
	        	console.log(index + '=' + value);
	    	});
		});	
	}
</script>
<?php echo $this->Form->postLink(__('Sortear'), array('action' => 'index'), null, __('Confirmar sorteio?')); ?>
<h3>Participante sorteado foi: </h3>
<h2><?=@$participante?></h2>