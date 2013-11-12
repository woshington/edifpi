<?php
/**
 * InscricaoAtividadeFixture
 *
 */
class InscricaoAtividadeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'inscricao_atividade';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idInscricaoAtividade' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'inscricao_idinscricao' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'atividade_idatividade' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idInscricaoAtividade', 'unique' => 1),
			'fk_inscricao_has_atividade_atividade1_idx' => array('column' => 'atividade_idatividade', 'unique' => 0),
			'fk_inscricao_has_atividade_inscricao1_idx' => array('column' => 'inscricao_idinscricao', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'idInscricaoAtividade' => 1,
			'inscricao_idinscricao' => 1,
			'atividade_idatividade' => 1
		),
	);

}
