<?php
App::uses('AppModel', 'Model');
/**
 * TipoParticipante Model
 *
 * @property TipoParticipacao $TipoParticipacao
 */
class TipoParticipante extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'tipo_participante';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idTipo_participante';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descricao';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'idTipo_participante' => array(
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
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'TipoParticipacao' => array(
			'className' => 'TipoParticipacao',
			'foreignKey' => 'tipo_participante_id',
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

}
