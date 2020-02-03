<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Http\Client;

/**
 * ScryFall component
 */
class ScryFallComponent extends Component
{
    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * Busca cartasen la base de datos de ScryFall
     * 
     * @return Array/null Un objeto Json con las cartas encontradas con todos los datos de ScryFall
     */
    public function buscarCartas($q)
    {   
        //Creamos un objeto cliente HTTP para hacer la petición a ScryFall
        $http = new Client();
        //Hacemos la petición a ScryFall
        $response = $http->get('https://api.scryfall.com/cards/search', 
        [
            "q"=>$q,
            "unique"=>"prints",
            "pretty"=>"true"            
        ]);
        
        return $response->getJson();

    }
}
