<?php
App::uses('AppModel', 'Model');
class Atividade extends AppModel {

	public $useTable = 'atividade';

	public $primaryKey = 'id';

	public $displayField = 'descricao';

	public $validate = array(
		'idatividade' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'titulo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
		'tipo_atividade_id' => array(
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

	public $belongsTo = array(
		'TipoAtividade' => array(
			'className' => 'TipoAtividade',
			'foreignKey' => 'tipo_atividade_id',
		)
	);

	public $hasAndBelongsToMany = array(
		'Inscricao' => array(
			'className' => 'Inscricao',
			'joinTable' => 'inscricao_atividade',
			'foreignKey' => 'atividade_id',
			'associationForeignKey' => 'inscricao_id',
			'unique' => 'keepExisting',
		)
	);

	public function getAtividades($tipoParticipacao){
		$TipoParticipacao = ClassRegistry::init('TipoParticipacao');
		$tipoParticipacao = $TipoParticipacao->findById($tipoParticipacao);
		$tipoAtividades = $tipoParticipacao['TipoAtividade'];
		$atividades = array();
		$atividades['agrupados'] = array();
		foreach ($tipoAtividades as $tipo){
			$tpAtividades = $this->TipoAtividade->findById($tipo['TipoParticipacaoTipoAtividade']['tipo_atividade_id']);
			if($tipo['agrupar']){
				$atividades['agrupados'][$tipo['descricao']] = array();
			}
			foreach ($tpAtividades['Atividade'] as $atividade) {
				if($tipo['agrupar']){
					$atividades['agrupados'][$tipo['descricao']][$atividade['id']] = $atividade['titulo'];
				}else{
					$atividades[$atividade['id']] = $atividade['titulo'].': '.$atividade['descricao'];
				}
			}			
		}
		return $atividades;
	}	
}
