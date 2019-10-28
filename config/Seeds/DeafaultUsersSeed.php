<?php
use Migrations\AbstractSeed;
//Para hashear la contraseña
use Cake\Auth\DefaultPasswordHasher;


/**
 * DeafaultUsers seed.
 */
class DeafaultUsersSeed extends AbstractSeed
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
        //Creamos un objeto de tipo Hasher, para hashear la contraseña de los usuarios que crearemos aquí
        $hasher = new DefaultPasswordHasher();
        //Hasheamos el password 123456 para todos los usuarios falsos
        $passwdHasheado = $hasher->hash("123456");

        //Este objeto servirá para crear datos falsos
        $faker = Faker\Factory::create();

        //Creamos un arreglo vacío de datos
        $data = [];

        for($i = 0; $i < 30; $i++)
        {
            //creamos 20 filas de datos
            //En PHP cuando los corchetes angulares están vacíos, quiere decir que el dato se agrega al final del arreglo
            $data[] = 
            [
                'first_name' => $faker->firstName(),
                'last_name'  => $faker->lastName(),
                'username'   => $faker->userName,
                'email'      => $faker->email,
                'password'   => $passwdHasheado,
                'role'       => $faker->randomElement($array = array ('user','admin')),
                'active'     => true,
                'created'    => date("Y-m-d H:i:s"),
                'modified'   => date("Y-m-d H:i:s")    
            ];
        }

        
        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
