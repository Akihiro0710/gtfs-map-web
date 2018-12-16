<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StopsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StopsTable Test Case
 */
class StopsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\StopsTable
     */
    public $Stops;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Stops',
        'app.Zones',
        'app.StopTimes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Stops') ? [] : ['className' => StopsTable::class];
        $this->Stops = TableRegistry::getTableLocator()->get('Stops', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Stops);

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
