<?php
App::uses('TipoParticipante', 'Model');

/**
 * TipoParticipante Test Case
 *
 */
class TipoParticipanteTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_participante',
		'app.tipo_participacao',
		'app.inscricao',
		'app.participante',
		'app.instituicao',
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
		$this->TipoParticipante = ClassRegistry::init('TipoParticipante');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoParticipante);

		parent::tearDown();
	}

}
