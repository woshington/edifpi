<?php
App::uses('AppModel', 'Model');
class TipoParticipacao extends AppModel {
	public $useTable = 'tipo_participacao';
	public $primaryKey = 'idTipo_participacao';

	public $displayField = 'descricao';

	public $validate = array(
		'idTipo_participacao' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'descricao' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'valor' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'inicio_inscricao' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fim_inscricao' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'tipo_participante_id' => array(
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

	public $belongsTo = array(
		'TipoParticipante' => array(
			'className' => 'TipoParticipante',
			'foreignKey' => 'tipo_participante_id',
		)
	);

	public $hasMany = array(
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'tipo_participacao_id',
			'dependent' => false,
		)
	);

	public function afterFind($results, $primary = false) {		
		foreach ($results as $key => $val) {
			if (isset($val['TipoParticipacao']['inicio_inscricao'])) {
        	    $results[$key]['TipoParticipacao']['inicio_inscricao'] = $this->dateFormatAfterFind($val['TipoParticipacao']['inicio_inscricao']);
        	}
        	if (isset($val['TipoParticipacao']['fim_inscricao'])) {
        	    $results[$key]['TipoParticipacao']['fim_inscricao'] = $this->dateFormatAfterFind($val['TipoParticipacao']['fim_inscricao']);
        	}
    	}
    	return $results;
	}

	//**/

	public function getLista(){
		$tipoParticipacaos = $this->find('all');
		$retorno  = array();
		foreach ($tipoParticipacaos as $tipoParticipacao) {			
			$retorno[$tipoParticipacao['TipoParticipacao']['idTipo_participacao']] = 
				$tipoParticipacao['TipoParticipacao']['descricao']." - ".$tipoParticipacao['TipoParticipante']['descricao'].
				" - R$ ".$tipoParticipacao['TipoParticipacao']['valor'];
		}
		return $retorno;
	}
}
