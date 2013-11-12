<?php
App::uses('AppModel', 'Model');
/**
 * Instituicao Model
 *
 * @property Participante $Participante
 */
class Instituicao extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Instituicao';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idInstituicao';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'sigla';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Participante' => array(
			'className' => 'Participante',
			'foreignKey' => 'instituicao_id',
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
