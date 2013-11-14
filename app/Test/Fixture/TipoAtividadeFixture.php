<?php
/**
 * TipoAtividadeFixture
 *
 */
class TipoAtividadeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tipo_atividade';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTipo_atividade' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'agrupar' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idTipo_atividade', 'unique' => 1)
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
			'idTipo_atividade' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'agrupar' => 1
		),
	);

}
