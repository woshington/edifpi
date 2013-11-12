<?php
App::uses('AppModel', 'Model');
/**
 * InscricaoAtividade Model
 *
 * @property Inscricaoinscricao $Inscricaoinscricao
 * @property Atividadeatividade $Atividadeatividade
 */
class InscricaoAtividade extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'inscricao_atividade';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idInscricaoAtividade';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'idInscricaoAtividade' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'inscricao_idinscricao' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'atividade_idatividade' => array(
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
		'Inscricaoinscricao' => array(
			'className' => 'Inscricaoinscricao',
			'foreignKey' => 'inscricao_idinscricao',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Atividadeatividade' => array(
			'className' => 'Atividadeatividade',
			'foreignKey' => 'atividade_idatividade',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
