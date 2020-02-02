<?php
namespace App\Command;
use Cake\Http\Client;

use Cake\Console\Arguments;
use Cake\Console\Command;
use Cake\Console\ConsoleIo;

class GetsetsCommand extends Command
{
    public function execute(Arguments $args, ConsoleIo $io)
    {
        $http = new Client();
        
        // Simple get
        $response = $http->get('https://api.scryfall.com/sets', ["pretty"=>'true']);
        /*
        // Simple get with querystring
        $response = $http->get('http://example.com/search', ['q' => 'widget']);
        
        // Simple get with querystring & additional headers
        $response = $http->get('http://example.com/search', ['q' => 'widget'], [
          'headers' => ['X-Requested-With' => 'XMLHttpRequest']
        ]);
        */
    
        $sets = $response->getJson()["data"];
        foreach($sets as $s)
        {
            echo "Code: ".  $s["code"]."\n";
            echo "Name:". $s["name"]."\n";            
            echo "\n";
        }
        


    }
}