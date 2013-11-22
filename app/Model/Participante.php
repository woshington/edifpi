<?php
App::uses('AppModel', 'Model');
class Participante extends AppModel {

	public $useTable = 'participante';
	public $primaryKey = 'id';
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
			'unique' => array(
				'rule'=>array('isUnique'),
				'message' => 'CPF ja esta em uso',				
			)
		),
		'nascimento' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Informe a data de nascimento!',
				//'allowEmpty' => false,
				'required' => true,
				//'last' => false, // Stop validation after this rule
				
			),
		),
		'email' => array(
			'email' => array(			
				'rule' => array ('email'),
				'message' => 'Informe um e-mail valido',
				'required'=>true,
				'on'=>'create',
			),
			'unique' => array(
				'rule'=>array('isUnique'),
				'message' => 'Email ja esta em uso',

			)
		),
		'senha' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Senha obrigatorio',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),            
        ),
        'confirmacaoSenha' => array(
    		'notEmpty' => array(
    			'rule' => 'notEmpty',
    			'required' => true,
    			'message' => 'Confirme sua senha.',
    			'on' => 'create', // Limit validation to 'create' or 'update' operations
    		),
    		'confirmacaoSenha' => array(
    			'rule' => array('confirmacaoSenha'),
    			'message' => 'As senhas não são iguais',
    			'allowEmpty' => false,
    			'required' => true,
    			//'last' => false, // Stop validation after this rule
    			'on' => 'create', // Limit validation to 'create' or 'update' operations
    			),
    		),
	);

	
	public $belongsTo = array(
		'Instituicao' => array(
			'className' => 'Instituicao',
			'foreignKey' => 'instituicao_id',	
		)
	);	

	public function beforeValidate($options = array()){
		// Retirando pontos e traços do cpf
		$this->data[$this->alias]['cpf'] = str_replace("-","", str_replace(".","", $this->data[$this->alias]['cpf'])); 
	}
	public function beforeSave($options = array()){		
		if (isset($this->data[$this->alias]['senha'])) {
            $this->data[$this->alias]['senha'] = AuthComponent::password($this->data[$this->alias]['senha']);
        }
        if (isset($this->data[$this->alias]['nascimento'])) {
        	$this->data[$this->alias]['nascimento'] = $this->dateFormatBeforeSave($this->data[$this->alias]['nascimento']);        
        }
        return true;
	}
	public function afterFind($results, $primary = false) {
	    foreach ($results as $key => $val) {
	        if (isset($val['Participante']['nascimento'])) {
	            $results[$key]['Participante']['nascimento'] = $this->dateFormatAfterFind($val['Participante']['nascimento']);	            
	        }
	    }
	    return $results;
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
