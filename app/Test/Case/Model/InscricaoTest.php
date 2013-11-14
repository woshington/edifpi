<?php
App::uses('Inscricao', 'Model');

/**
 * Inscricao Test Case
 *
 */
class InscricaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inscricao',
		'app.participante',
		'app.instituicao',
		'app.tipo_participacao',
		'app.atividade',
		'app.tipo_atividade',
		'app.inscricao_atividade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Inscricao = ClassRegistry::init('Inscricao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inscricao);

		parent::tearDown();
	}

}
