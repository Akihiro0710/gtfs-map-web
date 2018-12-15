<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FareAttributesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FareAttributesTable Test Case
 */
class FareAttributesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FareAttributesTable
     */
    public $FareAttributes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.FareAttributes',
        'app.Fares'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('FareAttributes') ? [] : ['className' => FareAttributesTable::class];
        $this->FareAttributes = TableRegistry::getTableLocator()->get('FareAttributes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->FareAttributes);

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
