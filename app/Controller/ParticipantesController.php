<?php
App::uses('AppController', 'Controller');

class ParticipantesController extends AppController {
	public $components = array('Paginator');
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add','loginAutomatico');
	}
	public function view($id = null) {
		if (!$this->Participante->exists($id)) {
			throw new NotFoundException(__('Invalid participante'));
		}
		$options = array('conditions' => array('Participante.' . $this->Participante->primaryKey => $id));
		$this->set('participante', $this->Participante->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Participante->create();
			$this->request->data['Participante']['status'] = true;			
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('The participante has been saved.'));
				return $this->redirect(array('action' => 'loginAutomatico', $this->Participante->id));
			} else {
				$this->Session->setFlash(__('The participante could not be saved. Please, try again.'));
			}
		}
		$instituicaos = $this->Participante->Instituicao->find('list');
		$this->set(compact('instituicaos'));
	}

	public function edit($id = null) {
		if (!$this->Participante->exists($id)) {
			throw new NotFoundException(__('Invalid participante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('The participante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Participante.' . $this->Participante->primaryKey => $id));
			$this->request->data = $this->Participante->find('first', $options);
		}
		$instituicaos = $this->Participante->Instituicao->find('list');
		$this->set(compact('instituicaos'));
	}

	public function admin_index() {
		$this->Participante->recursive = 0;
		$this->set('participantes', $this->Paginator->paginate());
	}


	public function admin_view($id = null) {
		if (!$this->Participante->exists($id)) {
			throw new NotFoundException(__('Invalid participante'));
		}
		$options = array('conditions' => array('Participante.' . $this->Participante->primaryKey => $id));
		$this->set('participante', $this->Participante->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Participante->create();
			//$this->request->data['Participante']['nascimento'] = $this->formatDataList($this->request->data['Participante']['nascimento']);
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('The participante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante could not be saved. Please, try again.'));
			}
		}
		$instituicaos = $this->Participante->Instituicao->find('list');
		$this->set(compact('instituicaos'));
	}


	public function admin_edit($id = null) {
		if (!$this->Participante->exists($id)) {
			throw new NotFoundException(__('Invalid participante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('The participante has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The participante could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Participante.' . $this->Participante->primaryKey => $id));
			$this->request->data = $this->Participante->find('first', $options);
		}
		$instituicaos = $this->Participante->Instituicao->find('list');
		$this->set(compact('instituicaos'));
	}

	public function login() {		
		if($this->request->is('post')){        	
            if ($this->Auth->login()) {
                if(!$this->Session->read('Auth.User.admin')){                
                	$this->redirect($this->Auth->redirectUrl(array('controller'=>'inscricaos', 'action'=>'index', 'admin'=>0)));
                }else{
                	$this->redirect($this->Auth->redirectUrl(array('controller'=>'inscricaos', 'action'=>'listarNaoConfirmados', 'admin'=>1)));
                }
            } else {
                $this->Session->setFlash('O nome de usuário ou a senha estão errados. Tente novamente.');
            }
        }
    }
    public function loginAutomatico($idParticipante){
    	if(!$this->Session->read('Auth.User')){
    		if(!is_null($idParticipante)){
				$options = array('conditions' => array('Participante.' . $this->Participante->primaryKey => $idParticipante));
				$participante = $this->Participante->find('first', $options);			
				if ($this->Auth->login($participante['Participante'])) {
					$this->redirect($this->Auth->redirectUrl(array('controller'=>'inscricaos', 'action'=>'index')));
				}
			}
		}
    }
    public function logout(){
    	return $this->redirect($this->Auth->logout());
    }
}
