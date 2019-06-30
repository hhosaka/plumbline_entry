<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EquipmentsetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EquipmentsetsTable Test Case
 */
class EquipmentsetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EquipmentsetsTable
     */
    public $Equipmentsets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Equipmentsets',
        'app.Courses',
        'app.Equipment'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Equipmentsets') ? [] : ['className' => EquipmentsetsTable::class];
        $this->Equipmentsets = TableRegistry::getTableLocator()->get('Equipmentsets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Equipmentsets);

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
