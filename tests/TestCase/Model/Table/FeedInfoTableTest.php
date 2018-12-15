<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FeedInfoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FeedInfoTable Test Case
 */
class FeedInfoTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FeedInfoTable
     */
    public $FeedInfo;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FeedInfo'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FeedInfo') ? [] : ['className' => FeedInfoTable::class];
        $this->FeedInfo = TableRegistry::getTableLocator()->get('FeedInfo', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FeedInfo);

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
