<?php
App::uses('AppController', 'Controller');

class InscricaosController extends AppController {

	public $components = array('Paginator');

	public function index() {
		$this->Inscricao->recursive = 0;
		$this->set('inscricaos', $this->Paginator->paginate());
	}

	public function view($id = null) {
		if (!$this->Inscricao->exists($id)) {
			throw new NotFoundException(__('Invalid inscricao'));
		}
		$options = array('conditions' => array('Inscricao.' . $this->Inscricao->primaryKey => $id));
		$this->set('inscricao', $this->Inscricao->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Inscricao->create();
			if ($this->Inscricao->save($this->request->data)) {
				$this->Session->setFlash(__('The inscricao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.'));
			}
		}
		$participantes = $this->Inscricao->Participante->find('list');
		$tipoParticipacaos = $this->Inscricao->TipoParticipacao->find('list');
		$atividades = $this->Inscricao->Atividade->find('list');
		$this->set(compact('participantes', 'tipoParticipacaos', 'atividades'));
	}

	public function edit($id = null) {
		if (!$this->Inscricao->exists($id)) {
			throw new NotFoundException(__('Invalid inscricao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Inscricao->save($this->request->data)) {
				$this->Session->setFlash(__('The inscricao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Inscricao.' . $this->Inscricao->primaryKey => $id));
			$this->request->data = $this->Inscricao->find('first', $options);
		}
		$participantes = $this->Inscricao->Participante->find('list');
		$tipoParticipacaos = $this->Inscricao->TipoParticipacao->find('list');
		$atividades = $this->Inscricao->Atividade->find('list');
		$this->set(compact('participantes', 'tipoParticipacaos', 'atividades'));
	}
}
