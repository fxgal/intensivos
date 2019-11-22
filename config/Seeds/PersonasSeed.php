<?php
use Migrations\AbstractSeed;

/**
 * Personas seed.
 */
class PersonasSeed extends AbstractSeed
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
        $this->execute('TRUNCATE TABLE personas');

        $faker = Faker\Factory::create();
        $user = 1;
        $data = [];

        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'usuario_id'    => $user++,
                'nombres'       => $faker->firstName,
                'apellidos'     => $faker->lastName,
                'email'         => $faker->email,
                'cedula'        => $faker->numberBetween(6000000, 27800000),
                'created'       => date('Y-m-d H:i:s'),
            ];
        }

        $table = $this->table('personas');
        $table->insert($data)->save();
    }
}
