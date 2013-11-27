<?php
App::uses('AppController', 'Controller');

class InscricaosController extends AppController {
	public $uses = array('Inscricao', 'Atividade', 'InscricaoAtividade','Participante');
	public $components = array('Paginator','RequestHandler');
	public $helpers = array('Js');

	public function index() {
		$this->Inscricao->recursive = 0;
		$this->paginate = array(
			'conditions'=>array(
				'Participante.id'=>$this->Session->read('Auth.User.id'),
			)
		);
		$this->set('inscricaos', $this->Paginator->paginate());
	}

	public function view() {
		$id = $this->Inscricao->findByParticipanteId($this->Session->read('Auth.User.id'));		
		
		$options = array('conditions' => array('Inscricao.' . $this->Inscricao->primaryKey => $id['Inscricao']['id']));
		$inscricao = $this->Inscricao->find('first', $options);
		if($inscricao['Participante']['id']!=$this->Session->read('Auth.User.id')){
			throw new NotFoundException(__('Inscrição invalida para esse participante'));
		}
		$this->set('inscricao', $inscricao);
	}

	public function add() {				
		if ($this->request->is('post')) {
			$this->Inscricao->create();
			$atividades = $this->Atividade->getAtividades($this->request->data['Inscricao']['tipo_participacao_id']);
			$agrupados = array();
			if(isset($atividades['agrupados'])){
				$agrupados = $atividades['agrupados'];
				unset($atividades['agrupados']);
			}
			$this->request->data['Inscricao']['participante_id'] = $this->Session->read('Auth.User.id');			
			// Setando para array
			settype($this->request->data['Atividade']['Atividade'], 'array');

			// Incluindo agrupados
			foreach ($agrupados as $TipoParticipacao=>$atividade) {
				foreach($atividade as $id=>$valor){
					array_push($this->request->data['Atividade']['Atividade'], $id);
				}
			}
			foreach ($this->request->data['Atividade'] as $key=>$atividade) {
				array_push($this->request->data['Atividade']['Atividade'], $atividade);
			}			
			if ($this->Inscricao->save($this->request->data)) {			
				$this->Session->setFlash(__('The inscricao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.'));
			}
		}		
		//debug($this->InscricaoAtividade->getDataSource()->getLog(false, false)); 
		$tipoParticipacaos = $this->Inscricao->TipoParticipacao->getLista();		
		$this->set(compact('tipoParticipacaos'));
	}

	public function edit() {
		$id = $this->Inscricao->findByParticipanteId($this->Session->read('Auth.User.id'));
		if($id['Inscricao']['status']){
			throw new Exception("Inscricao ja confirmada procure o administrador para alterar a inscricao", 1);			
		}
		if ($this->request->is(array('post', 'put')))  {			
			$atividades = $this->Atividade->getAtividades($this->request->data['Inscricao']['tipo_participacao_id']);
			$agrupados = array();
			if(isset($atividades['agrupados'])){
				$agrupados = $atividades['agrupados'];
				unset($atividades['agrupados']);
			}
			$this->request->data['Inscricao']['participante_id'] = $this->Session->read('Auth.User.id');			
			// Setando para array
			settype($this->request->data['Atividade']['Atividade'], 'array');

			// Incluindo agrupados
			foreach ($agrupados as $TipoParticipacao=>$atividade) {
				foreach($atividade as $id=>$valor){
					array_push($this->request->data['Atividade']['Atividade'], $id);
				}
			}
			foreach ($this->request->data['Atividade'] as $key=>$atividade) {
				array_push($this->request->data['Atividade']['Atividade'], $atividade);
			}

			if ($this->Inscricao->save($this->request->data)) {			
				$this->Session->setFlash(__('The inscricao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.'));
			}
		}elseif(count($id)<=0) {
			$this->Session->setFlash(__('Participante não tem inscrição valida.'));
			return $this->redirect(array('action' => 'index'));
		}else {
			$options = array('conditions' => array('Inscricao.' . $this->Inscricao->primaryKey => $id['Inscricao']['id']));
			$this->request->data = $this->Inscricao->find('first', $options);
		}		
		$tipoParticipacaos = $this->Inscricao->TipoParticipacao->getLista();		
		$this->set(compact('tipoParticipacaos'));
	}

	
    public function listar_atividades_json() {
        $this->layout = false;
        if ($this->RequestHandler->isAjax()) {
            $this->set('atividades', $this->Atividade->getAtividades($this->params['url']['tipoParticipacaoId']));
        }
    }
    public function listar_atividades2_json() {
        $this->layout = false;
        if ($this->RequestHandler->isAjax()) {
            $this->set('atividades', $this->Atividade->getAtividadesTurno(
            	$this->params['url']['atividade_id'], 
            	$this->params['url']['tipoParticipacao']
        	));
        }
    }
    public function admin_index(){
    	$this->Inscricao->recursive = 0;		
		$this->set('inscricaos', $this->Paginator->paginate());

    }
    public function admin_listar_atividades_json() {
        $this->layout = false;
        if ($this->RequestHandler->isAjax()) {
            $this->set('atividades', $this->Atividade->getAtividades($this->params['url']['tipoParticipacaoId']));
        }
    }
    public function admin_listar_atividades2_json() {
        $this->layout = false;
        if ($this->RequestHandler->isAjax()) {
            $this->set('atividades', $this->Atividade->getAtividadesTurno(
            	$this->params['url']['atividade_id'], 
            	$this->params['url']['tipoParticipacao']
        	));
        }
    }
    public function admin_view($idInscricao) {		
    	
		$options = array('conditions' => array('Inscricao.' . $this->Inscricao->primaryKey => $idInscricao));
		$this->set('inscricao', $this->Inscricao->find('first', $options));
	}

	public function admin_add($participanteId = null){
		//$participanteId = 38;		
		if ($this->request->is('post')) {
			$this->Inscricao->create();
			$atividades = $this->Atividade->getAtividades($this->request->data['Inscricao']['tipo_participacao_id']);
			$agrupados = array();
			if(isset($atividades['agrupados'])){
				$agrupados = $atividades['agrupados'];
				unset($atividades['agrupados']);
			}
			$this->request->data['Inscricao']['participante_id'] = $participanteId;			
			// Setando para array
			settype($this->request->data['Atividade']['Atividade'], 'array');

			// Incluindo agrupados
			foreach ($agrupados as $TipoParticipacao=>$atividade) {
				foreach($atividade as $id=>$valor){
					array_push($this->request->data['Atividade']['Atividade'], $id);
				}
			}
			foreach ($this->request->data['Atividade'] as $key=>$atividade) {
				array_push($this->request->data['Atividade']['Atividade'], $atividade);
			}	
			pr($this->request->data);
			if ($this->Inscricao->save($this->request->data)) {			
				$this->Session->setFlash(__('The inscricao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.'));
			}
		}		 
		$tipoParticipacaos = $this->Inscricao->TipoParticipacao->getLista();		
		$this->set(compact('tipoParticipacaos'));
	}
    public function admin_listarNaoConfirmados(){
    	$this->Inscricao->recursive = 0;
    	$condicao = array('Inscricao.status'=>false);    	
    	if($this->request->is('post')){
    		$condicao['Participante.cpf'] = $this->request->data['Participante']['cpf'];
    	}
    	$this->paginate =  array(
    		'conditions'=>array(
    			$condicao
    		)
    	);    	
    	$this->set("inscricaos", $this->Paginator->paginate());
    }    

    public function admin_confirmar($idInscricao){    	
    	$participante = $this->Inscricao->find('first', array('conditions'=>array('Inscricao.id'=>$idInscricao)));
    	$this->Inscricao->read(null, $idInscricao); 
    	$this->Inscricao->set(array(
    		'status'=>true,
    		'data_pagamento'=>date('Y-m-d'),
    		'confirmou'=>$this->Session->read('Auth.User.id')
    	));
    	if($this->Inscricao->save()){
    		echo "<script>alert('".$participante['Participante']['nome']." confirmado!');</script>";
    		echo "<script>window.location='".
    			Router::url(array('controller'=>'inscricaos','action'=>'listarNaoConfirmados','admin'=>1))."'</script>";
    	}else{
    		echo "<script>alert('".$participante['Participante']['nome']." nao foi possivel confirmar. Tente mais tarde!');</script>";
    		echo "<script>window.location='".
    			Router::url(array('action'=>'listarNaoConfirmados','admin'=>1))."'</script>";
    	}
    }
    public function admin_extornar($idInscricao){
    	$participante = $this->Inscricao->find('first', array('conditions'=>array('Inscricao.id'=>$idInscricao)));
    	$this->Inscricao->read(null, $idInscricao); 
    	$this->Inscricao->set(array('status'=>false,'data_pagamento'=>null));    		
    	if($this->Inscricao->save()){
    		echo "<script>alert('".$participante['Participante']['nome']." extornado!');</script>";
    		echo "<script>window.location='".
    			Router::url(array('controller'=>'inscricaos','action'=>'listarNaoConfirmados','admin'=>1))."'</script>";
    	}else{
    		echo "<script>alert('".$participante['Participante']['nome']." nao foi possivel extornar. Tente mais tarde!');</script>";
    		echo "<script>window.location='".
    			Router::url(array('controller'=>'participantes','action'=>'confirmados','admin'=>1))."'</script>";
    	}    	
    }    
    public function admin_edit($idInscricao = null) {
    	// pr($this->Atividade->getAtividadesTurno(3));
    	$idI = $this->Inscricao->findById($idInscricao);
		if ($this->request->is(array('post', 'put')))  {			
			$atividades = $this->Atividade->getAtividades($this->request->data['Inscricao']['tipo_participacao_id']);
			$agrupados = array();
			if(isset($atividades['agrupados'])){
				$agrupados = $atividades['agrupados'];
				unset($atividades['agrupados']);
			}
			$this->request->data['Inscricao']['participante_id'] = $idI['Participante']['id'];
			// Setando para array
			settype($this->request->data['Atividade']['Atividade'], 'array');

			// Incluindo agrupados
			foreach ($agrupados as $TipoParticipacao=>$atividade) {
				foreach($atividade as $id=>$valor){
					array_push($this->request->data['Atividade']['Atividade'], $id);
				}
			}
			foreach ($this->request->data['Atividade'] as $key=>$atividade) {
				array_push($this->request->data['Atividade']['Atividade'], $atividade);
			}				
			if ($this->Inscricao->save($this->request->data)) {			
				$this->Session->setFlash(__('The inscricao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.'));
			}
		}elseif(count($idI)<=0) {
			$this->Session->setFlash(__('Participante não tem inscrição valida.'));
			return $this->redirect(array('action' => 'index'));
		}else {
			$options = array('conditions' => array('Inscricao.' . $this->Inscricao->primaryKey => $idI['Inscricao']['id']));
			$this->request->data = $this->Inscricao->find('first', $options);
		}		
		$tipoParticipacaos = $this->Inscricao->TipoParticipacao->getLista();		
		$this->set(compact('tipoParticipacaos'));
	}

}
