<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\OfficeJpTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\OfficeJpTable Test Case
 */
class OfficeJpTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\OfficeJpTable
     */
    public $OfficeJp;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.OfficeJp',
        'app.Offices'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('OfficeJp') ? [] : ['className' => OfficeJpTable::class];
        $this->OfficeJp = TableRegistry::getTableLocator()->get('OfficeJp', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->OfficeJp);

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
