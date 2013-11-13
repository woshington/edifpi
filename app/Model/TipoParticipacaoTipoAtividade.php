<?php
App::uses('AppModel', 'Model');
/**
 * TipoParticipacaoTipoAtividade Model
 *
 * @property TipoAtividade $TipoAtividade
 * @property TipoParticipacao $TipoParticipacao
 */
class TipoParticipacaoTipoAtividade extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tipo_participacao_tipo_atividade';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'TipoAtividade' => array(
			'className' => 'TipoAtividade',
			'foreignKey' => 'tipo_atividade_id',
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
}
