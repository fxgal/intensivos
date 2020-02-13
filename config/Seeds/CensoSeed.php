<?php
use Migrations\AbstractSeed;

/**
 * Censo seed.
 */
class CensoSeed extends AbstractSeed
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
        // $faker = Faker\Factory::create();
        // $data = [];

        // for ($i = 0; $i < 400; $i++) {
        //     $data = [
        //         'persona_id'    => ($i + 1),
        //         'materia_id'    => ($i + 1),
        //         'periodo_id'    => $faker->randomElement(1, 2),
        //         'modified'      => date('Y-m-d H:i:s'),
        //         'created'       => date('Y-m-d H:i:s'),
        //     ];
        // }

        // $table = $this->table('censos');
        // $table->insert($data)->save();
    }
}
