<?php
App::uses('AppModel', 'Model');

class TipoParticipacao extends AppModel {

	public $useTable = 'tipo_participacao';

	public $displayField = 'descricao';

	public $validate = array(
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


	public $hasAndBelongsToMany = array(
		'TipoAtividade' => array(
			'className' => 'TipoAtividade',
			'joinTable' => 'tipo_participacao_tipo_atividade',
			'foreignKey' => 'tipo_participacao_id',
			'associationForeignKey' => 'tipo_atividade_id',
			'unique' => 'keepExisting',			
		)
	);
	public function getLista(){
		$tipoParticipacaos = $this->find('all');
		$retorno  = array();
		foreach ($tipoParticipacaos as $tipoParticipacao) {			
			$retorno[$tipoParticipacao['TipoParticipacao']['id']] = 
				$tipoParticipacao['TipoParticipacao']['descricao']." - ".$tipoParticipacao['TipoParticipante']['descricao'].
				" - R$ ".$tipoParticipacao['TipoParticipacao']['valor'];
		}
		return $retorno;
	}

}
