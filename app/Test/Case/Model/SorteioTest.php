<?php
App::uses('Sorteio', 'Model');

/**
 * Sorteio Test Case
 *
 */
class SorteioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.sorteio',
		'app.participante',
		'app.instituicao'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Sorteio = ClassRegistry::init('Sorteio');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Sorteio);

		parent::tearDown();
	}

}
