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

	public function view($id = null) {
		if (!$this->Inscricao->exists($id)) {
			throw new NotFoundException(__('Invalid inscricao'));
		}		
		
		$options = array('conditions' => array('Inscricao.' . $this->Inscricao->primaryKey => $id));
		$inscricao = $this->Inscricao->find('first', $options);
		if($inscricao['Participante']['id']!=$this->Session->read('Auth.User.id')){
			throw new NotFoundException(__('Inscrição invalida para esse participante'));
		}
		$this->set('inscricao', $inscricao);
	}

	public function add() {
		// $atividades = $this->Atividade->getAtividades(4);
		$agrupados = array();
		if(isset($atividades['agrupados'])){
			$agrupados = $atividades['agrupados'];
			unset($atividades['agrupados']);
		}
		//pr($agrupados);
		if ($this->request->is('post')) {
			$this->Inscricao->create();
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
		$participantes = $this->Inscricao->Participante->find('list');
		$tipoParticipacaos = $this->Inscricao->TipoParticipacao->getLista();		
		$this->set(compact('participantes', 'tipoParticipacaos', 'atividades', 'agrupados'));
	}

	public function edit() {
		$id = $this->Inscricao->findByParticipanteId($this->Session->read('Auth.User.id'));
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Inscricao->save($this->request->data)) {
				$this->Session->setFlash(__('The inscricao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Inscricao.' . $this->Inscricao->primaryKey => $id['Inscricao']['id']));
			$this->request->data = $this->Inscricao->find('first', $options);
		}
		$participantes = $this->Inscricao->Participante->find('list');
		$tipoParticipacaos = $this->Inscricao->TipoParticipacao->find('list');
		$atividades = $this->Inscricao->Atividade->find('list');
		$this->set(compact('participantes', 'tipoParticipacaos', 'atividades'));
	}
    public function listar_atividades_json() {
        $this->layout = false;
        // $atividades = $this->Atividade->getAtividades(4);/
        if ($this->RequestHandler->isAjax()) {
            $this->set('atividades', $this->Atividade->getAtividades($this->params['url']['tipoParticipacaoId']));
        }
    }
    public function admin_view($idInscricao) {		
		$options = array('conditions' => array('Inscricao.' . $this->Inscricao->primaryKey => $idInscricao));
		$this->set('inscricao', $this->Inscricao->find('first', $options));
	}
    public function admin_listarNaoConfirmados(){
    	$this->Inscricao->recursive = 0;
    	$this->paginate =  array(
    		'conditions'=>array(
    			'Inscricao.status'=>false
    		)
    	);
    	$this->set("inscricaos", $this->Paginator->paginate());
    }

    public function admin_confirmar($idInscricao){
    	$participante = $this->Inscricao->find('first', array('conditions'=>array('Inscricao.id'=>$idInscricao)));
    	$this->Inscricao->read(null, $idInscricao); 
    	$this->Inscricao->set(array('status'=>true,'data_pagamento'=>date('Y-m-d')));
    	if($this->Inscricao->save()){
    		echo "<script>alert('".$participante['Participante']['nome']." confirmado!');</script>";
    		echo "<script>window.location='".
    			Router::url(array('controller'=>'inscricaos','action'=>'listarNaoConfirmados','admin'=>1))."'</script>";
    	}
    }
}
