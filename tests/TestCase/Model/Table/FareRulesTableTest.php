<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FareRulesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FareRulesTable Test Case
 */
class FareRulesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FareRulesTable
     */
    public $FareRules;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FareRules',
        'app.Fares',
        'app.Routes',
        'app.Origins',
        'app.Destinations'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FareRules') ? [] : ['className' => FareRulesTable::class];
        $this->FareRules = TableRegistry::getTableLocator()->get('FareRules', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FareRules);

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
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
