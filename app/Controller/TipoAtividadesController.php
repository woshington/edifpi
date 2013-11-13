<?php
App::uses('AppController', 'Controller');

class TipoAtividadesController extends AppController {

	public $components = array('Paginator');


	public function admin_index() {
		$this->TipoAtividade->recursive = 0;
		$this->set('tipoAtividades', $this->Paginator->paginate());
	}

	public function admin_view($id = null) {
		if (!$this->TipoAtividade->exists($id)) {
			throw new NotFoundException(__('Invalid tipo atividade'));
		}
		$options = array('conditions' => array('TipoAtividade.' . $this->TipoAtividade->primaryKey => $id));
		$this->set('tipoAtividade', $this->TipoAtividade->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->TipoAtividade->create();
			if ($this->TipoAtividade->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo atividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo atividade could not be saved. Please, try again.'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->TipoAtividade->exists($id)) {
			throw new NotFoundException(__('Invalid tipo atividade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->TipoAtividade->save($this->request->data)) {
				$this->Session->setFlash(__('The tipo atividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipo atividade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('TipoAtividade.' . $this->TipoAtividade->primaryKey => $id));
			$this->request->data = $this->TipoAtividade->find('first', $options);
		}
	}
}
