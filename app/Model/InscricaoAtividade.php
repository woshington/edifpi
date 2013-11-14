<?php
App::uses('AppModel', 'Model');
class InscricaoAtividade extends AppModel {

	public $useTable = 'inscricao_atividade';

	public $primaryKey = 'id';


	public $virtualFields = array(
    	'unico' => 'CONCAT(InscricaoAtividade.inscricao_id," ",InscricaoAtividade.atividade_id)'
	);

	public $validate = array(
		'id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'inscricao_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'atividade_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'unico'=>array(
			'unique'=>array(
				'rule'=>array('isUnique'),
				'message'=>'Atividade ja cadastrada para essa inscricao'
			),
		)
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'Inscricao' => array(
			'className' => 'Inscricao',
			'foreignKey' => 'inscricao_id',			
		),
		'Atividade' => array(
			'className' => 'Atividade',
			'foreignKey' => 'atividade_id',			
		)
	);
}
