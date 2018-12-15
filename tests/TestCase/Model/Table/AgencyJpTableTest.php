<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgencyJpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgencyJpTable Test Case
 */
class AgencyJpTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AgencyJpTable
     */
    public $AgencyJp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AgencyJp',
        'app.Agencies'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AgencyJp') ? [] : ['className' => AgencyJpTable::class];
        $this->AgencyJp = TableRegistry::getTableLocator()->get('AgencyJp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AgencyJp);

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
