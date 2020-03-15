<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MascotaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MascotaTable Test Case
 */
class MascotaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MascotaTable
     */
    public $Mascota;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Mascota',
        'app.Persona',
        'app.Especie'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Mascota') ? [] : ['className' => MascotaTable::class];
        $this->Mascota = TableRegistry::getTableLocator()->get('Mascota', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Mascota);

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
