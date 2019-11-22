<?php
use Migrations\AbstractSeed;

/**
 * Configuraciones seed.
 */
class ConfiguracionesSeed extends AbstractSeed
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
        $this->execute('TRUNCATE TABLE configuraciones');

        $data = [];

        $data[] = [
            'nombre'        => "Titulo del sitio",
            'clave'         => "DF7S48",
            'valor'         => "Intensivos 2020",
            'created'       => date('Y-m-d H:i:s'),
        ];

        $data[] = [
            'nombre'        => "Inscripciones",
            'clave'         => "FTG321",
            'valor'         => "Cerradas",
            'created'       => date('Y-m-d H:i:s'),
        ];

        $table = $this->table('configuraciones');
        $table->insert($data)->save();
    }
}
