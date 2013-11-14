<?php
App::uses('InscricaoAtividade', 'Model');

/**
 * InscricaoAtividade Test Case
 *
 */
class InscricaoAtividadeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inscricao_atividade',
		'app.inscricaoinscricao',
		'app.atividadeatividade'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->InscricaoAtividade = ClassRegistry::init('InscricaoAtividade');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->InscricaoAtividade);

		parent::tearDown();
	}

}
