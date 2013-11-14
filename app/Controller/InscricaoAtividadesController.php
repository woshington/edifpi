<?php
App::uses('AppController', 'Controller');
/**
 * InscricaoAtividades Controller
 *
 * @property InscricaoAtividade $InscricaoAtividade
 * @property PaginatorComponent $Paginator
 */
class InscricaoAtividadesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->InscricaoAtividade->recursive = 0;
		$this->set('inscricaoAtividades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->InscricaoAtividade->exists($id)) {
			throw new NotFoundException(__('Invalid inscricao atividade'));
		}
		$options = array('conditions' => array('InscricaoAtividade.' . $this->InscricaoAtividade->primaryKey => $id));
		$this->set('inscricaoAtividade', $this->InscricaoAtividade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->InscricaoAtividade->create();
			if ($this->InscricaoAtividade->save($this->request->data)) {
				$this->Session->setFlash(__('The inscricao atividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao atividade could not be saved. Please, try again.'));
			}
		}
		$inscricaos = $this->InscricaoAtividade->Inscricao->find('list');
		$atividades = $this->InscricaoAtividade->Atividade->find('list');
		$this->set(compact('inscricaos', 'atividades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->InscricaoAtividade->exists($id)) {
			throw new NotFoundException(__('Invalid inscricao atividade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InscricaoAtividade->save($this->request->data)) {
				$this->Session->setFlash(__('The inscricao atividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao atividade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InscricaoAtividade.' . $this->InscricaoAtividade->primaryKey => $id));
			$this->request->data = $this->InscricaoAtividade->find('first', $options);
		}
		$inscricaos = $this->InscricaoAtividade->Inscricao->find('list');
		$atividades = $this->InscricaoAtividade->Atividade->find('list');
		$this->set(compact('inscricaos', 'atividades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->InscricaoAtividade->id = $id;
		if (!$this->InscricaoAtividade->exists()) {
			throw new NotFoundException(__('Invalid inscricao atividade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InscricaoAtividade->delete()) {
			$this->Session->setFlash(__('The inscricao atividade has been deleted.'));
		} else {
			$this->Session->setFlash(__('The inscricao atividade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->InscricaoAtividade->recursive = 0;
		$this->set('inscricaoAtividades', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->InscricaoAtividade->exists($id)) {
			throw new NotFoundException(__('Invalid inscricao atividade'));
		}
		$options = array('conditions' => array('InscricaoAtividade.' . $this->InscricaoAtividade->primaryKey => $id));
		$this->set('inscricaoAtividade', $this->InscricaoAtividade->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->InscricaoAtividade->create();
			if ($this->InscricaoAtividade->save($this->request->data)) {
				$this->Session->setFlash(__('The inscricao atividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao atividade could not be saved. Please, try again.'));
			}
		}
		$inscricaos = $this->InscricaoAtividade->Inscricao->find('list');
		$atividades = $this->InscricaoAtividade->Atividade->find('list');
		$this->set(compact('inscricaos', 'atividades'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->InscricaoAtividade->exists($id)) {
			throw new NotFoundException(__('Invalid inscricao atividade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->InscricaoAtividade->save($this->request->data)) {
				$this->Session->setFlash(__('The inscricao atividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The inscricao atividade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('InscricaoAtividade.' . $this->InscricaoAtividade->primaryKey => $id));
			$this->request->data = $this->InscricaoAtividade->find('first', $options);
		}
		$inscricaos = $this->InscricaoAtividade->Inscricao->find('list');
		$atividades = $this->InscricaoAtividade->Atividade->find('list');
		$this->set(compact('inscricaos', 'atividades'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->InscricaoAtividade->id = $id;
		if (!$this->InscricaoAtividade->exists()) {
			throw new NotFoundException(__('Invalid inscricao atividade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->InscricaoAtividade->delete()) {
			$this->Session->setFlash(__('The inscricao atividade has been deleted.'));
		} else {
			$this->Session->setFlash(__('The inscricao atividade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
