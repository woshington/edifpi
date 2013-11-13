<?php
App::uses('AppModel', 'Model');
/**
 * TipoAtividade Model
 *
 * @property Atividade $Atividade
 * @property TipoParticipacao $TipoParticipacao
 */
class TipoAtividade extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tipo_atividade';
	public $displayField = 'descricao';
/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idTipo_atividade';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'idTipo_atividade' => array(
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
		'agrupar' => array(
			'boolean' => array(
				'rule' => array('boolean'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Atividade' => array(
			'className' => 'Atividade',
			'foreignKey' => 'tipo_atividade_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);


/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'TipoParticipacao' => array(
			'className' => 'TipoParticipacao',
			'joinTable' => 'tipo_participacao_tipo_atividade',
			'foreignKey' => 'tipo_atividade_id',
			'associationForeignKey' => 'tipo_participacao_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
		)
	);

}
