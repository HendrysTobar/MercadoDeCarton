<?php
namespace App\Test\TestCase\Controller;

use App\Controller\CardsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\CardsController Test Case
 */
class CardsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Cards',
        'app.Users'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->get('/cards/view/1?precio=30');
        // Assert view variables
        $valor =  $this->viewVariable('valor');

        $this->assertEquals(75000, $valor);


        $this->get('/cards/view/1?precio=10');
        // Assert view variables
        $valor =  $this->viewVariable('valor');
        $this->assertEquals(25000, $valor);
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
