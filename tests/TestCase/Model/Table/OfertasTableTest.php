<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfertasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfertasTable Test Case
 */
class OfertasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\OfertasTable
     */
    public $Ofertas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Ofertas',
        'app.Materias',
        'app.Periodos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Ofertas') ? [] : ['className' => OfertasTable::class];
        $this->Ofertas = TableRegistry::getTableLocator()->get('Ofertas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Ofertas);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
