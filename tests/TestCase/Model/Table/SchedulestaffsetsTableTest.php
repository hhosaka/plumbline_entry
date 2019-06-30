<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\SchedulestaffsetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\SchedulestaffsetsTable Test Case
 */
class SchedulestaffsetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\SchedulestaffsetsTable
     */
    public $Schedulestaffsets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Schedulestaffsets',
        'app.Schedules',
        'app.Staffs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Schedulestaffsets') ? [] : ['className' => SchedulestaffsetsTable::class];
        $this->Schedulestaffsets = TableRegistry::getTableLocator()->get('Schedulestaffsets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Schedulestaffsets);

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
