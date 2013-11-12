<?php
App::uses('AppModel', 'Model');
class Participante extends AppModel {

	public $useTable = 'Participante';
	public $primaryKey = 'idParticipante';
	public $displayField = 'nome';

	public $validate = array(
		'nome' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Nome do participante nao pode ficar vazio!',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cpf' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'CPF nao pode ficar vazio!',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'nascimento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Informe a data de nascimento!',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
			'email' => array(			
				'rule' => array ('email'),
				'message' => 'Informe um e-mail valido',
				'required'=>true
			)
		),
		'senha' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Senha obrigatorio',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),            
        ),
        'confirmacaoSenha' => array(
    		'notEmpty' => array(
    			'rule' => 'notEmpty',
    			'required' => true,
    			'message' => 'Confirme sua senha.'
    		),
    		'confirmacaoSenha' => array(
    			'rule' => array('confirmacaoSenha'),
    			'message' => 'As senhas não são iguais',
    			'allowEmpty' => false,
    			'required' => true,
    			//'last' => false, // Stop validation after this rule
    			//'on' => 'create', // Limit validation to 'create' or 'update' operations
    			),
    		),
	);

	
	public $belongsTo = array(
		'Instituicao' => array(
			'className' => 'Instituicao',
			'foreignKey' => 'instituicao_id',	
		)
	);

	public function beforeSave($options = array()){
		if (isset($this->data[$this->alias]['senha'])) {
            $this->data[$this->alias]['senha'] = AuthComponent::password($this->data[$this->alias]['senha']);
        }
        $data = explode("/", $this->data[$this->alias]['nascimento']);
        return true;
	}
	public function confirmacaoSenha($confirmacaoSenha){
    	$password = $this->data['Participante']['senha']; 
    	$confirmacaoSenha = $this->data['Participante']['confirmacaoSenha'];//Security::hash($this->data['Usuario']['confirmacaoSenha'], null, true);    	
    	if($password===$confirmacaoSenha){    		
            return true;    		 
        }else{
            return false;    		 
    	}
    }   
}
