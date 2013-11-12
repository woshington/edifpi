<?php
App::uses('AppController', 'Controller');

class TipoParticipacaosController extends AppController {

	public $components = array('Paginator');
	public function admin_index() {
		$this->TipoParticipacao->recursive = 0;
		$this->set('tipoParticipacaos', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->TipoParticipacao->exists($id)) {
			throw new NotFoundException(__('Invalid tipo participacao'));
		}
		$options = array('conditions' => array('TipoParticipacao.' . $this->TipoParticipacao->primaryKey => $id));
		$this->set('tipoParticipacao', $this->TipoParticipacao->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TipoParticipacao->create();
			if ($this->TipoParticipacao->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo participacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo participacao could not be saved. Please, try again.'));
			}
		}
		$tipoParticipantes = $this->TipoParticipacao->TipoParticipante->find('list');
		$this->set(compact('tipoParticipantes'));
	}

	public function admin_edit($id = null) {
		if (!$this->TipoParticipacao->exists($id)) {
			throw new NotFoundException(__('Invalid tipo participacao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoParticipacao->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo participacao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo participacao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoParticipacao.' . $this->TipoParticipacao->primaryKey => $id));
			$this->request->data = $this->TipoParticipacao->find('first', $options);
		}
		$tipoParticipantes = $this->TipoParticipacao->TipoParticipante->find('list');
		$this->set(compact('tipoParticipantes'));
	}
}
