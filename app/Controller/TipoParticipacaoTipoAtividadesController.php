<?php
App::uses('AppController', 'Controller');
class TipoParticipacaoTipoAtividadesController extends AppController {
	public $components = array('Paginator');

	public function admin_index() {
		$this->TipoParticipacaoTipoAtividade->recursive = 0;
		$this->set('tipoParticipacaoTipoAtividades', $this->Paginator->paginate());
	}


	public function admin_view($id = null) {
		if (!$this->TipoParticipacaoTipoAtividade->exists($id)) {
			throw new NotFoundException(__('Invalid tipo participacao tipo atividade'));
		}		
		$options = array('conditions' => array('TipoParticipacaoTipoAtividade.' . $this->TipoParticipacaoTipoAtividade->primaryKey => $id));
		$this->set('tipoParticipacaoTipoAtividade', $this->TipoParticipacaoTipoAtividade->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TipoParticipacaoTipoAtividade->create();
			if ($this->TipoParticipacaoTipoAtividade->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo participacao tipo atividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo participacao tipo atividade could not be saved. Please, try again.'));
			}
		}
		$tipoAtividades = $this->TipoParticipacaoTipoAtividade->TipoAtividade->find('list');
		$tipoParticipacaos = $this->TipoParticipacaoTipoAtividade->TipoParticipacao->getLista();
		$this->set(compact('tipoAtividades', 'tipoParticipacaos'));
	}

	public function admin_edit($id = null) {
		if (!$this->TipoParticipacaoTipoAtividade->exists($id)) {
			throw new NotFoundException(__('Invalid tipo participacao tipo atividade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoParticipacaoTipoAtividade->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo participacao tipo atividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo participacao tipo atividade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoParticipacaoTipoAtividade.' . $this->TipoParticipacaoTipoAtividade->primaryKey => $id));
			$this->request->data = $this->TipoParticipacaoTipoAtividade->find('first', $options);
		}
		$tipoAtividades = $this->TipoParticipacaoTipoAtividade->TipoAtividade->find('list');
		$tipoParticipacaos = $this->TipoParticipacaoTipoAtividade->TipoParticipacao->find('list');
		$this->set(compact('tipoAtividades', 'tipoParticipacaos'));
	}
}
