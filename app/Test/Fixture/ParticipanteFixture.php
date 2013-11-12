<?php
/**
 * ParticipanteFixture
 *
 */
class ParticipanteFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'Participante';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idParticipante' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'cpf' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 11, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'nascimento' => array('type' => 'date', 'null' => true, 'default' => null),
		'instituicao_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idParticipante', 'instituicao_id'), 'unique' => 1),
			'fk_Participante_Instituicao_idx' => array('column' => 'instituicao_id', 'unique' => 0)
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
			'idParticipante' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'cpf' => 'Lorem ips',
			'nascimento' => '2013-11-12',
			'instituicao_id' => 1
		),
	);

}
