<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AutorTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AutorTable Test Case
 */
class AutorTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AutorTable
     */
    public $Autor;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Autor',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Autor') ? [] : ['className' => AutorTable::class];
        $this->Autor = TableRegistry::getTableLocator()->get('Autor', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Autor);

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
