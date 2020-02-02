<?php
use Migrations\AbstractSeed;
use Cake\Http\Client;

/**
 * Collections seed.
 */
class CollectionsSeed extends AbstractSeed
{
    
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        //Arreglo de datos a llenar
        $data = [];

        //Obtenemos una referencia a la tabla collections
        $table = $this->table('collections');

        //Por precaución, borramos las tuplas de colecciones que existan en la BD
        $this->execute("DELETE FROM collections;");

        //Función auxiliar que Llena los datos (ver más abajo)
        $this->llenarDatosDesdeScryfall($data);
            

        //Insertamos los datos y actualizamos la tabla
        $table->insert($data)->save();
    }

    ///Llena los datos $data con las collections obtenidas desde el sitio "Scryfall"
    ///ScryFall es un servicio web que almacena todas las colecciones del juego Magic The Gathering
    private function llenarDatosDesdeScryfall(&$data)
    {
        //Creamos un objeto cliente HTTP para hacer la petición a ScryFall
        $http = new Client();
        //Hacemos la petición a ScryFall
        $response = $http->get('https://api.scryfall.com/sets');
           
        //ScryFall retorna un JSON con unalista y un arreglo llamado "data" con todas las colecciones
        $sets = $response->getJson()["data"];
        //recorremos las colecciones obtenidas
        foreach($sets as $s)
        {
            //Llenamos los datos de $data con los datos necesarios (no necesitamos todo de ScryFall)
            $data[] =
            [
                //El id de nuestra base de datos es llamado "code" en ScryFall
                'id' => $s["code"],
                'name' => $s["name"],
                'description' => $s["name"],
                'url_image' => $s["icon_svg_uri"],
                //Las columnas creada y modificada se ponen a fecha de hoy
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")
                
            ];                       
        }
        
    }



}
