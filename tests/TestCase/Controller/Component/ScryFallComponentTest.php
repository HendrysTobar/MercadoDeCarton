<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\ScryFallComponent;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\ScryFallComponent Test Case
 */
class ScryFallComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\ScryFallComponent
     */
    public $ScryFall;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->ScryFall = new ScryFallComponent($registry);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ScryFall);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
