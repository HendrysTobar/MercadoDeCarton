<?php
use Migrations\AbstractMigration;

class CreateUsersCards extends AbstractMigration
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
        
        //Creamos la tabla
        $table = $this->table('users_cards');

        //Agregamos columnas
        $table->addColumn('price', 'integer')
        ->addColumn('price_in_dolar','float')
        ->addColumn('created','datetime')
        ->addColumn('modified','datetime')
        ->addColumn('is_cop', 'boolean')
        ->addColumn('is_foil', 'boolean')
        ->addColumn('amount','integer', array('limit'=>'11'));
        

        //Agregamos llaves foráneas
        $table->addColumn('user_id', 'integer')->addForeignKey('user_id', 'users','id', ['delete'=>'CASCADE', 'update'=>'CASCADE']);
        $table->addColumn('card_id', 'uuid')->addForeignKey('card_id', 'cards','id', ['delete'=>'CASCADE', 'update'=>'CASCADE']);
        $table->create();

        


    }
    
}
