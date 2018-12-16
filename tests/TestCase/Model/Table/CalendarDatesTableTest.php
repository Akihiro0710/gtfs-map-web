<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CalendarDatesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CalendarDatesTable Test Case
 */
class CalendarDatesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CalendarDatesTable
     */
    public $CalendarDates;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CalendarDates',
        'app.Services'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CalendarDates') ? [] : ['className' => CalendarDatesTable::class];
        $this->CalendarDates = TableRegistry::getTableLocator()->get('CalendarDates', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CalendarDates);

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
