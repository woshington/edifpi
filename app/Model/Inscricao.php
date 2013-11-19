<?php
App::uses('AppModel', 'Model');

class Inscricao extends AppModel {


	public $useTable = 'inscricao';

	public $primaryKey = 'id';

	public $validate = array(
		'data_inscricao' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'participante_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'unique' => array(
				'rule'=>array('isUnique'),
				'message' => 'Participante ja inscrito',
			)
    		
		),
		'tipo_participacao_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Participante' => array(
			'className' => 'Participante',
			'foreignKey' => 'Participante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'TipoParticipacao' => array(
			'className' => 'TipoParticipacao',
			'foreignKey' => 'tipo_participacao_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasAndBelongsToMany = array(
		'Atividade' => array(
			'className' => 'Atividade',
			'joinTable' => 'inscricao_atividade',
			'foreignKey' => 'inscricao_id',
			'associationForeignKey' => 'atividade_id',
			'unique' => 'keepExisting',			
		)
	);

	public function afterFind($results, $primary = false) {
	    foreach ($results as $key => $val) {
	        if (isset($val['Inscricao']['created'])) {
	            $results[$key]['Inscricao']['created'] = $this->dateFormatAfterFind($val['Inscricao']['created']);
	            $results[$key]['Inscricao']['data_pagamento'] = $this->dateFormatAfterFind($val['Inscricao']['data_pagamento']);
	        }
	    }
	    return $results;
	}
	public function beforeSave($options = array()){			
		if (!empty($this->data['Inscricao']['data_pagamento'])) {
			$this->data[$this->alias]['data_pagamento'] = $this->dateFormatBeforeSave($this->data[$this->alias]['data_pagamento']);        
		}
		
	 	if (!empty($this->data['Inscricao']['created'])) {
        	$this->data['Inscricao']['created'] = $this->dateFormatBeforeSave($this->data['Inscricao']['created']);
        
	    }
    	return true;
	}	
}