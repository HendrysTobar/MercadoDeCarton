<?php
namespace App\Controller\Component;



/**
 * Precio component
 */
class CalculadorPrecio 
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function CalcularPrecioEnPesos($valorEnDolares, $valorDolar = 2500)
    {
        return $valorEnDolares *  $valorDolar; 
    }

}
