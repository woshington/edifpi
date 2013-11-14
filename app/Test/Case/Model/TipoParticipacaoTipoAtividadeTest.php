<?php
App::uses('TipoParticipacaoTipoAtividade', 'Model');

/**
 * TipoParticipacaoTipoAtividade Test Case
 *
 */
class TipoParticipacaoTipoAtividadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tipo_participacao_tipo_atividade',
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
		$this->TipoParticipacaoTipoAtividade = ClassRegistry::init('TipoParticipacaoTipoAtividade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->TipoParticipacaoTipoAtividade);

		parent::tearDown();
	}

}
