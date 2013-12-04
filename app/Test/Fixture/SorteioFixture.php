<?php
/**
 * SorteioFixture
 *
 */
class SorteioFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'sorteio';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary'),
		'created' => array('type' => 'date', 'null' => false, 'default' => null),
		'participante_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'participante_id' => array('column' => 'participante_id', 'unique' => 0)
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
			'created' => '2013-12-04',
			'participante_id' => 1
		),
	);

}
