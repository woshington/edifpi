<?php 
	echo $this->Html->link('inscreva-se', array('controller'=>'participantes','action'=>'add','admin'=>0));
	echo "<br />";
	echo $this->Html->link('logar', array('controller'=>'participantes','action'=>'login','admin'=>0));
?>