<?php
use Migrations\AbstractSeed;

/**
 * Materias seed.
 */
class MateriasSeed extends AbstractSeed
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
        $data = [];

        $table = $this->table('materias');
        $table->insert($data)->save();
    }
}
