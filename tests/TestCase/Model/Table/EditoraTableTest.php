<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EditoraTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EditoraTable Test Case
 */
class EditoraTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EditoraTable
     */
    public $Editora;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Editora',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Editora') ? [] : ['className' => EditoraTable::class];
        $this->Editora = TableRegistry::getTableLocator()->get('Editora', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Editora);

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
