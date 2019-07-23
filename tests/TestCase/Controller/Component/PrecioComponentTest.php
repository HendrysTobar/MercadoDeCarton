<?php
namespace App\Test\TestCase\Controller\Component;

use App\Controller\Component\CalculadorPrecio;
use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\Component\PrecioComponent Test Case
 */
class PrecioComponentTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Controller\Component\Component\CalculadorPrecio
     */
    public $Precio;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $registry = new ComponentRegistry();
        $this->Precio = new CalculadorPrecio($registry);
        
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Precio);

        parent::tearDown();
    }

   

    

    /**
     * @dataProvider provider
     */
    public function testCalcularPrecio($a, $b, $c)
    {
        $p = $this->Precio->CalcularPrecioEnPesos($a, $b);
        $this->assertEquals($c, $p);
    }

    public function provider()
    {
        return array(
          array(10, 2500, 25000),
          array(10, 2000, 20000),
          array(1, 2500, 2500),
          array(3, 2000, 6000)
        );
    }
}

