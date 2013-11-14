<?php
App::uses('TipoAtividade', 'Model');

/**
 * TipoAtividade Test Case
 *
 */
class TipoAtividadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_atividade',
		'app.atividade',
		'app.inscricao',
		'app.participante',
		'app.instituicao',
		'app.tipo_participacao',
		'app.tipo_participante',
		'app.inscricao_atividade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoAtividade = ClassRegistry::init('TipoAtividade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoAtividade);

		parent::tearDown();
	}

}
