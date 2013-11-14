<?php
/**
 * TipoParticipacaoTipoAtividadeFixture
 *
 */
class TipoParticipacaoTipoAtividadeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'tipo_participacao_tipo_atividade';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'tipo_atividade_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'tipo_participacao_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'fk_tipo_participacao_tipo_atividade_tipo_atividade' => array('column' => 'tipo_atividade_id', 'unique' => 0),
			'fk_tipo_participacao_tipo_atividade_tipo_participacao' => array('column' => 'tipo_participacao_id', 'unique' => 0)
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
			'id' => 1,
			'tipo_atividade_id' => 1,
			'tipo_participacao_id' => 1
		),
	);

}
