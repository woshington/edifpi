<?php
App::uses('Atividade', 'Model');

/**
 * Atividade Test Case
 *
 */
class AtividadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.atividade',
		'app.tipo_atividade',
		'app.inscricao',
		'app.inscricao_atividade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Atividade = ClassRegistry::init('Atividade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Atividade);

		parent::tearDown();
	}

}
