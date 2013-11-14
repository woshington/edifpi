<?php
App::uses('TipoParticipacao', 'Model');

/**
 * TipoParticipacao Test Case
 *
 */
class TipoParticipacaoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_participacao',
		'app.tipo_participante',
		'app.inscricao',
		'app.participante',
		'app.instituicao',
		'app.atividade',
		'app.tipo_atividade',
		'app.tipo_participacao_tipo_atividade',
		'app.inscricao_atividade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->TipoParticipacao = ClassRegistry::init('TipoParticipacao');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoParticipacao);

		parent::tearDown();
	}

/**
 * testGetLista method
 *
 * @return void
 */
	public function testGetLista() {
	}

}
