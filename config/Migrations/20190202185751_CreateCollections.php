<?php
use Migrations\AbstractMigration;

class CreateCollections extends AbstractMigration
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
        $table = $this->table('collections', ['id'=>false, 'primary_key'=>'id']);

        $table->addColumn('id', 'string', [
            'default' => null,
            'limit' => 7,
            'null' => false,
        ]);
        $table->addColumn('name', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('description', 'string', [
            'default' => null,
            'limit' => 500,
            'null' => false,
        ]);
        $table->addColumn('url_image', 'string', [
            'default' => null,
            'limit' => 500,
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
        $table->addIndex([
            'id',
        ], [
            'name' => 'UNIQUE_ID',
            'unique' => true,
        ]);
        $table->create();
    }
}
