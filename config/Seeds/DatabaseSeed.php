<?php
use Migrations\AbstractSeed;

/**
 * Database seed.
 */
class DatabaseSeed extends AbstractSeed
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
        $this->call('ConfiguracionesSeed');
        $this->call('RolesSeed');
        $this->call('UsuariosSeed');
        $this->call('PersonasSeed');
        $this->call('MateriasSeed');
        $this->call('PrelacionesSeed');
    }
}
