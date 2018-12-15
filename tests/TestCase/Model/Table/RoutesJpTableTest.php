<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RoutesJpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RoutesJpTable Test Case
 */
class RoutesJpTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\RoutesJpTable
     */
    public $RoutesJp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.RoutesJp',
        'app.Routes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RoutesJp') ? [] : ['className' => RoutesJpTable::class];
        $this->RoutesJp = TableRegistry::getTableLocator()->get('RoutesJp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->RoutesJp);

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
