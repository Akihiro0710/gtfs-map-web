<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TripsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TripsTable Test Case
 */
class TripsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TripsTable
     */
    public $Trips;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Trips',
        'app.Routes',
        'app.Services',
        'app.Blocks',
        'app.Shapes',
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
        $config = TableRegistry::getTableLocator()->exists('Trips') ? [] : ['className' => TripsTable::class];
        $this->Trips = TableRegistry::getTableLocator()->get('Trips', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Trips);

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
