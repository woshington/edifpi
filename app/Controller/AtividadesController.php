<?php
App::uses('AppController', 'Controller');

class AtividadesController extends AppController {

	public $components = array('Paginator');

	public function admin_index() {
		$this->Atividade->recursive = 0;
		$this->set('atividades', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->Atividade->exists($id)) {
			throw new NotFoundException(__('Invalid atividade'));
		}
		$options = array('conditions' => array('Atividade.' . $this->Atividade->primaryKey => $id));
		$this->set('atividade', $this->Atividade->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Atividade->create();
			if ($this->Atividade->save($this->request->data)) {
				$this->Session->setFlash(__('The atividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The atividade could not be saved. Please, try again.'));
			}
		}
		$tipoAtividades = $this->Atividade->TipoAtividade->find('list');		
		$this->set(compact('tipoAtividades', 'inscricaos'));
	}

	public function admin_edit($id = null) {
		if (!$this->Atividade->exists($id)) {
			throw new NotFoundException(__('Invalid atividade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Atividade->save($this->request->data)) {
				$this->Session->setFlash(__('The atividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The atividade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Atividade.' . $this->Atividade->primaryKey => $id));
			$this->request->data = $this->Atividade->find('first', $options);
		}
		$tipoAtividades = $this->Atividade->TipoAtividade->find('list');
		$inscricaos = $this->Atividade->Inscricao->find('list');
		$this->set(compact('tipoAtividades', 'inscricaos'));
	}
}
