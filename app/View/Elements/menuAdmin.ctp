<div id="menu">
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
	))."&nbsp;&nbsp;";
	echo $this->Html->link(__('Frequencia'), array(
		'controller'=>'participantes',
		'action'=>'frequencia',
		'admin'=>1
	))."&nbsp;&nbsp;";
	echo $this->Html->link(__('Nova inscricao'), array(
		'controller'=>'participantes',
		'action'=>'add',
		'admin'=>1
	))."&nbsp;&nbsp;";	
	echo $this->Html->link(__('Participantes sem inscricao'), array(
		'controller'=>'participantes',
		'action'=>'semInscricao',
		'admin'=>1
	))."&nbsp;&nbsp;";	
	echo "<br />";
	echo $this->Html->link(__('Nova Instituicao'), array(
		'controller'=>'Instituicaos',
		'action'=>'add',
		'admin'=>1
	))."&nbsp;&nbsp;";
	echo $this->Html->link(__('Novo tipo de participante'), array(
		'controller'=>'tipoParticipantes',
		'action'=>'add',
		'admin'=>1
	))."&nbsp;&nbsp;";			
	echo $this->Html->link(__('listar tipos de participante'), array(
		'controller'=>'tipoParticipantes',
		'action'=>'index',
		'admin'=>1
	))."&nbsp;&nbsp;";	
	echo $this->Html->link(__('listar tipos de participacao'), array(
		'controller'=>'tipoParticipacaos',
		'action'=>'index',
		'admin'=>1
	))."&nbsp;&nbsp;";	
	echo $this->Html->link(__('Novo tipo de participacao'), array(
		'controller'=>'tipoParticipacaos',
		'action'=>'add',
		'admin'=>1
	))."&nbsp;&nbsp;";	
	echo $this->Html->link(__('listar tipos de atividade'), array(
		'controller'=>'tipoAtividades',
		'action'=>'index',
		'admin'=>1
	))."&nbsp;&nbsp;";	
	echo "<br />";
	echo $this->Html->link(__('Novo tipo de atividade'), array(
		'controller'=>'tipoAtividades',
		'action'=>'add',
		'admin'=>1
	))."&nbsp;&nbsp;";		
	echo $this->Html->link(__('listar atividades'), array(
		'controller'=>'atividades',
		'action'=>'index',
		'admin'=>1
	))."&nbsp;&nbsp;";	
	echo $this->Html->link(__('Nova atividade'), array(
		'controller'=>'atividades',
		'action'=>'add',
		'admin'=>1
	))."&nbsp;&nbsp;";	
	echo $this->Html->link(__('Participacao atividade (listar) '), array(
		'controller'=>'tipoParticipacaoTipoAtividades',
		'action'=>'index',
		'admin'=>1
	))."&nbsp;&nbsp;";	
	echo $this->Html->link(__('Participacao atividade (Nova)'), array(
		'controller'=>'tipoParticipacaoTipoAtividades',
		'action'=>'add',
		'admin'=>1
	))."&nbsp;&nbsp;";	
?>
</div>