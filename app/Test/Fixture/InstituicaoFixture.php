<?php
/**
 * InstituicaoFixture
 *
 */
class InstituicaoFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'Instituicao';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idInstituicao' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'nome' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'sigla' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idInstituicao', 'unique' => 1)
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
			'idInstituicao' => 1,
			'nome' => 'Lorem ipsum dolor sit amet',
			'sigla' => 'Lorem ipsum dolor sit amet'
		),
	);

}
