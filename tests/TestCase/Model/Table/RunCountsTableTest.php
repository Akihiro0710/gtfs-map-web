<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RunCountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RunCountsTable Test Case
 */
class RunCountsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RunCountsTable
     */
    public $RunCounts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RunCounts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RunCounts') ? [] : ['className' => RunCountsTable::class];
        $this->RunCounts = TableRegistry::getTableLocator()->get('RunCounts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RunCounts);

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
}
