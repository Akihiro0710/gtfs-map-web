<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TranslationsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TranslationsTable Test Case
 */
class TranslationsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TranslationsTable
     */
    public $Translations;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Translations',
        'app.Trans'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Translations') ? [] : ['className' => TranslationsTable::class];
        $this->Translations = TableRegistry::getTableLocator()->get('Translations', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Translations);

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
