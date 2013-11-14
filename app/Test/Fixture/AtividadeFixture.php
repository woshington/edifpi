<?php
/**
 * AtividadeFixture
 *
 */
class AtividadeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'atividade';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idatividade' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'titulo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'descricao' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'tipo_atividade_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idatividade', 'tipo_atividade_id'), 'unique' => 1),
			'fk_atividade_tipo_atividade1_idx' => array('column' => 'tipo_atividade_id', 'unique' => 0)
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
			'idatividade' => 1,
			'titulo' => 'Lorem ipsum dolor sit amet',
			'descricao' => 'Lorem ipsum dolor sit amet',
			'tipo_atividade_id' => 1
		),
	);

}
