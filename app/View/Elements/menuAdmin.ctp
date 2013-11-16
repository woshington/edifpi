<?php 
	echo $this->Html->link(__('Não Confirmados'), array(
		'controller'=>'inscricaos',
		'action'=>'listarNaoConfirmados',
		'admin'=>1
	))."&nbsp;&nbsp;";
	echo $this->Html->link(__('Confirmados'), array(
		'controller'=>'participantes',
		'action'=>'confirmados',
		'admin'=>1
	));
?>
