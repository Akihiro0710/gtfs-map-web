<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StopTimesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StopTimesTable Test Case
 */
class StopTimesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StopTimesTable
     */
    public $StopTimes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.StopTimes',
        'app.Trips',
        'app.Stops'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('StopTimes') ? [] : ['className' => StopTimesTable::class];
        $this->StopTimes = TableRegistry::getTableLocator()->get('StopTimes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->StopTimes);

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
