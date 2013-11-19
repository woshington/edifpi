<?php
App::uses('AppController', 'Controller');

class ParticipantesController extends AppController {
	public $uses = array('Participante', 'Inscricao');
	public $components = array('Paginator');
	public function beforeFilter(){
		parent::beforeFilter();
		$this->Auth->allow('add','loginAutomatico','esqueci');
	}
	public function view() {
		$id = $this->Session->read('Auth.User.id');
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

	public function edit() {
		$id = $this->Session->read('Auth.User.id');
		if (!$this->Participante->exists($id)) {
			throw new NotFoundException(__('Invalid participante'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('The participante has been saved.'));
				return $this->redirect(array('controller'=>'inscricaos', 'action' => 'index','admin'=>0));
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
			if ($this->Participante->save($this->request->data)) {
				$this->Session->setFlash(__('The participante has been saved.'));
				if(!$this->Participante->admin){
					return $this->redirect(array('controller'=>'inscricaos', 'action' => 'add','admin'=>1, $this->Participante->id));
				}
				
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
    public function esqueci(){
    	if($this->request->is('post')){
    		$usuario = $this->Participante->find('first',array(
    			'conditions'=>array(
    				'Participante.email'=>$this->request->data['Participante']['email'],
    				'Participante.cpf'=>$this->request->data['Participante']['cpf'],
				)
    		));    		
    		if(count($usuario)>0){
    			$this->loginAutomatico($usuario['Participante']['id']);
    		}else{
    			$this->Session->setFlash('O nome de usuário ou o cpf estão errados. Tente novamente.');
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
    public function admin_Confirmados(){
		$this->Inscricao->recursive = 0;
		$this->paginate = array(
			'conditions'=>array(
				'Inscricao.status'=>true
			)
		);
		$this->set('inscricaos', $this->Paginator->paginate('Inscricao'));
    }
    public function admin_semInscricao(){
    	$this->Participante->recursive = 1;
    	$this->paginate = array(
    		'joins'=>array(
    			array(
    				'table'=>'inscricao',
    				'alias'=>'Inscricao',
    				'type'=>'left outer',
    				'conditions'=> array('Participante.id = Inscricao.participante_id')    			
				),
    		),
    		'conditions'=>array(
    			'Inscricao.id'=>null
    		),
    	);    	
		$this->set('participantes', $this->Paginator->paginate());		
    }
}
