<?php
use Migrations\AbstractMigration;

class CreateCards extends AbstractMigration
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
               
        $table = $this->table('cards', ['id' => false, 'primary_key' => ['id']]);        

        $table->addColumn('id', 'uuid');        
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 100,
            'null' => false,
        ]);
        $table->addColumn('description', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('url_image', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
                
        $table->addColumn('collection_id','string',array('limit'=>'3'));
        $table->addForeignKey('collection_id','collections', 'id', array('delete'=>'CASCADE','update'=>'CASCADE'));
        $table->create();

        
        
        
    }

}
