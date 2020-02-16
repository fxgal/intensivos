<?php
use Migrations\AbstractSeed;

/**
 * Periodos seed.
 */
class PeriodosSeed extends AbstractSeed
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

        $data = [
            [
                'nombre'        => "Periodo 2020-3",
                'codigo'        => "2020-3",
                'estatus'       => "Activo",
                'modified'       => date('Y-m-d H:i:s'),
                'created'       => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'        => "Periodo 2021-3",
                'codigo'        => "2021-3",
                'estatus'       => "Inactivo",
                'modified'       => date('Y-m-d H:i:s'),
                'created'       => date('Y-m-d H:i:s'),
            ]
        ];

        $table = $this->table('periodos');
        $table->insert($data)->save();
    }
}
