<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\LicensesetsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\LicensesetsTable Test Case
 */
class LicensesetsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\LicensesetsTable
     */
    public $Licensesets;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Licensesets',
        'app.Staffs',
        'app.Licenses'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Licensesets') ? [] : ['className' => LicensesetsTable::class];
        $this->Licensesets = TableRegistry::getTableLocator()->get('Licensesets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Licensesets);

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
