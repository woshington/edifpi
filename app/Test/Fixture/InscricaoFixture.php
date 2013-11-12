<?php
/**
 * InscricaoFixture
 *
 */
class InscricaoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'inscricao';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idinscricao' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'data_inscricao' => array('type' => 'date', 'null' => false, 'default' => null),
		'status' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'data_pagamento' => array('type' => 'date', 'null' => false, 'default' => null),
		'Participante_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'tipo_participacao_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idinscricao', 'Participante_id', 'tipo_participacao_id'), 'unique' => 1),
			'fk_inscricao_Participante1_idx' => array('column' => 'Participante_id', 'unique' => 0),
			'fk_inscricao_tipo_participacao1_idx' => array('column' => 'tipo_participacao_id', 'unique' => 0)
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
			'idinscricao' => 1,
			'data_inscricao' => '2013-11-12',
			'status' => 1,
			'data_pagamento' => '2013-11-12',
			'Participante_id' => 1,
			'tipo_participacao_id' => 1
		),
	);

}
