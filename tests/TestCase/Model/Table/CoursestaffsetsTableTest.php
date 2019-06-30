<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoursestaffsetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoursestaffsetsTable Test Case
 */
class CoursestaffsetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoursestaffsetsTable
     */
    public $Coursestaffsets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Coursestaffsets',
        'app.Courses',
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
        $config = TableRegistry::getTableLocator()->exists('Coursestaffsets') ? [] : ['className' => CoursestaffsetsTable::class];
        $this->Coursestaffsets = TableRegistry::getTableLocator()->get('Coursestaffsets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Coursestaffsets);

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
