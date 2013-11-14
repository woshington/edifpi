<?php
App::uses('AppController', 'Controller');
class TipoParticipantesController extends AppController {
	public $components = array('Paginator');
	public function admin_index() {
		$this->TipoParticipante->recursive = 0;
		$this->set('tipoParticipantes', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->TipoParticipante->exists($id)) {
			throw new NotFoundException(__('Invalid tipo participante'));
		}
		$options = array('conditions' => array('TipoParticipante.' . $this->TipoParticipante->primaryKey => $id));
		$this->set('tipoParticipante', $this->TipoParticipante->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TipoParticipante->create();
			if ($this->TipoParticipante->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo participante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo participante could not be saved. Please, try again.'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->TipoParticipante->exists($id)) {
			throw new NotFoundException(__('Invalid tipo participante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoParticipante->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo participante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo participante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoParticipante.' . $this->TipoParticipante->primaryKey => $id));
			$this->request->data = $this->TipoParticipante->find('first', $options);
		}
	}
}
