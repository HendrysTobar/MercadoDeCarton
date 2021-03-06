<?php
use Migrations\AbstractMigration;

class CreateUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        
        $table = $this->table('users');
        $table->addColumn('first_name', 'string', array('limit'=>100))
        ->addColumn('last_name','string', array('limit'=>100))
        ->addColumn('username','string', array('limit'=>15))
        ->addColumn('email','string',array('limit'=>100))
        ->addColumn('password','string')
        ->addColumn('role','enum',array('values'=>'admin,user'))
        ->addColumn('active','boolean')
        ->addColumn('created','datetime')
        ->addColumn('modified','datetime')
        ->create();

       

        /***********Añadir unos cuantos usuarios */
        /****Se hace en el seed */



    }

   
}
