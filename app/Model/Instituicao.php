<?php
App::uses('AppModel', 'Model');
class Instituicao extends AppModel {

	public $useTable = 'Instituicao';
	public $primaryKey = 'id';

	public $displayField = 'sigla';

	public $hasMany = array(
		'Participante' => array(
			'className' => 'Participante',
			'foreignKey' => 'instituicao_id',
			'dependent' => false,
		)
	);

}
