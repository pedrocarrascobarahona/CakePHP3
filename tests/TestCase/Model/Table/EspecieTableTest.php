<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EspecieTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EspecieTable Test Case
 */
class EspecieTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EspecieTable
     */
    public $Especie;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Especie') ? [] : ['className' => EspecieTable::class];
        $this->Especie = TableRegistry::getTableLocator()->get('Especie', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Especie);

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
