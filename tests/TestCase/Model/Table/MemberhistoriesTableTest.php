<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MemberhistoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MemberhistoriesTable Test Case
 */
class MemberhistoriesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MemberhistoriesTable
     */
    public $Memberhistories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Memberhistories',
        'app.Members',
        'app.Schedules'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Memberhistories') ? [] : ['className' => MemberhistoriesTable::class];
        $this->Memberhistories = TableRegistry::getTableLocator()->get('Memberhistories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Memberhistories);

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
