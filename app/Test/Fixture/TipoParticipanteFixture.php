<?php
/**
 * TipoParticipanteFixture
 *
 */
class TipoParticipanteFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tipo_participante';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idTipo_participante' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'descricao' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idTipo_participante', 'unique' => 1)
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
			'idTipo_participante' => 1,
			'descricao' => 'Lorem ipsum dolor sit amet'
		),
	);

}
