<?php
App::uses('AppModel', 'Model');
/**
 * Sorteio Model
 *
 * @property Participante $Participante
 */
class Sorteio extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'sorteio';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'participante_id' => array(
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
			'foreignKey' => 'participante_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
