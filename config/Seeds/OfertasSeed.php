<?php
use Migrations\AbstractSeed;

/**
 * Ofertas seed.
 */
class OfertasSeed extends AbstractSeed
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
        $faker = Faker\Factory::create();
        $data = [];

        for ($i = 0; $i < 58; $i++) {
            for ($j = 1; $j < 3; $j++) {
                $data[] = [
                    'materia_id'    => ($i + 1),
                    'periodo_id'    => ($j),
                    'estatus'       => $faker->randomElement(array('Activo', 'Inactivo')),
                    'modified'      => date('Y-m-d H:i:s'),
                    'created'       => date('Y-m-d H:i:s'),
                ];
            }
        }

        $table = $this->table('ofertas');
        $table->insert($data)->save();
    }
}
