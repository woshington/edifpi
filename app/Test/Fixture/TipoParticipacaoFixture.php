<?php
/**
 * TipoParticipacaoFixture
 *
 */
class TipoParticipacaoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tipo_participacao';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTipo_participacao' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'valor' => array('type' => 'float', 'null' => false, 'default' => null),
		'inicio_inscricao' => array('type' => 'date', 'null' => false, 'default' => null),
		'fim_inscricao' => array('type' => 'date', 'null' => false, 'default' => null),
		'tipo_participante_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idTipo_participacao', 'tipo_participante_id'), 'unique' => 1),
			'fk_tipo_participacao_tipo_participante1_idx' => array('column' => 'tipo_participante_id', 'unique' => 0)
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
			'idTipo_participacao' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet',
			'valor' => 1,
			'inicio_inscricao' => '2013-11-12',
			'fim_inscricao' => '2013-11-12',
			'tipo_participante_id' => 1
		),
	);

}
