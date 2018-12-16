<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoutesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoutesTable Test Case
 */
class RoutesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoutesTable
     */
    public $Routes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Routes',
        'app.Agencies',
        'app.JpParentRoutes',
        'app.FareRules',
        'app.RoutesJp',
        'app.Trips'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Routes') ? [] : ['className' => RoutesTable::class];
        $this->Routes = TableRegistry::getTableLocator()->get('Routes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Routes);

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
