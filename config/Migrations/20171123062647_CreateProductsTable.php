<?php
use Migrations\AbstractMigration;

class CreateProductsTable extends AbstractMigration
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

        $table = $this->table('products');
        $table->addColumn('name', 'string', ['limit' => 100])
               ->addColumn('description', 'text')
               ->addColumn('quantity' , 'integer', ['signed' => 'disable'])
               ->addColumn('price', 'decimal', ['precision' => 5, 'scale' => 2, 'signed' => 'disable'])
               ->addColumn('photo', 'string')
               ->addColumn('photo_dir', 'string')
               ->addColumn('created' , 'datetime')
               ->addColumn('modified', 'datetime')
               ->create();
    }
}
