<?php
App::uses('AppController', 'Controller');

class InstituicaosController extends AppController {
	public $components = array('Paginator');

	public function admin_index() {
		$this->Instituicao->recursive = 0;
		$this->set('instituicaos', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->Instituicao->exists($id)) {
			throw new NotFoundException(__('Invalid instituicao'));
		}
		$options = array('conditions' => array('Instituicao.' . $this->Instituicao->primaryKey => $id));
		$this->set('instituicao', $this->Instituicao->find('first', $options));
	}


	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Instituicao->create();
			if ($this->Instituicao->save($this->request->data)) {
				$this->Session->setFlash(__('The instituicao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instituicao could not be saved. Please, try again.'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->Instituicao->exists($id)) {
			throw new NotFoundException(__('Invalid instituicao'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Instituicao->save($this->request->data)) {
				$this->Session->setFlash(__('The instituicao has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instituicao could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Instituicao.' . $this->Instituicao->primaryKey => $id));
			$this->request->data = $this->Instituicao->find('first', $options);
		}
	}
}
