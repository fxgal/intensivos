<?php
use Migrations\AbstractMigration;

class CreateConfiguraciones extends AbstractMigration
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
        $table = $this->table('configuraciones');
        $table->addColumn('nombre', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('clave', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addIndex([
            'clave',
        ], [
            'name' => 'UNIQUE_CLAVE',
            'unique' => true,
        ]);
        $table->addColumn('valor', 'string', [
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
        $table->create();
    }

    /**
     * Migrate Up.
     */
    public function up()
    {
        $this->change();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->table('configuraciones')->drop()->save();

        $this->up();
    }
}
