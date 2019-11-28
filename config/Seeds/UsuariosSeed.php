<?php
use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Usuarios seed.
 */
class UsuariosSeed extends AbstractSeed
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
        $data = [];
        $hasher = new DefaultPasswordHasher();

        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'rol_id'        => $faker->numberBetween(1, 2),
                'username'      => $faker->userName,
                'password'      => $hasher->hash($faker->password),
                'created'       => date('Y-m-d H:i:s'),
            ];
        }

        $table = $this->table('usuarios');
        $table->insert($data)->save();
    }
}
