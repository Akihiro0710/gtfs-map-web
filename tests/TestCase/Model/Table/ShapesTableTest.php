<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ShapesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ShapesTable Test Case
 */
class ShapesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ShapesTable
     */
    public $Shapes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Shapes',
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
        $config = TableRegistry::getTableLocator()->exists('Shapes') ? [] : ['className' => ShapesTable::class];
        $this->Shapes = TableRegistry::getTableLocator()->get('Shapes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Shapes);

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
