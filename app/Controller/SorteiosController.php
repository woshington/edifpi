<?php
App::uses('AppController', 'Controller');
class SorteiosController extends AppController {
	public $uses = array('Sorteio','Participante');
	public $components = array('Paginator');

	public function admin_index(){
		$participantes = array();
		if($this->request->is('post')){
			$participantes = $this->Participante->find('list', array(
				'fields'=>array('Participante.id','Participante.nome'),
	    		'joins'=>array(
	    			array(
	    				'table'=>'sorteio',
	    				'alias'=>'Sorteio',
	    				'type'=>'left outer',
	    				'conditions'=> array('Participante.id = Sorteio.participante_id') 
					),
					array(
						'table'=>'inscricao',
						'alias'=>'Inscricao',
						'type'=>'inner',
						'conditions'=>array('Participante.id = Inscricao.participante_id')
					),
	    		),
	    		'conditions'=>array(
	    			'Sorteio.id'=>null,
	    			'Participante.admin'=>false,
	    			'Inscricao.status'=>true
	    		),
    		));
    		//pr($participantes);
    		$id = array_rand($participantes);
    		$sorteado = $participantes[$id];
    		$dados['Sorteio']['participante_id'] = $id;
    		if(!$this->Sorteio->save($dados)){
    			$this->Session->setFlash(__('Não foi possivel realizar esse sorteio! contate o administrador.'));
    			return $this->redirect(array('action'=>'index'));
    		}
		}		
		$this->set('participantes', $participantes);
		$this->set('participante', @$sorteado); 		    		

	}

}
