<?php


use Phinx\Seed\AbstractSeed;

class PrelacionesSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $data = [
            [
                'materia_id'    => 2,
                'prelacion_id'    => 8,
            ],
            [
                'materia_id'    => 9,
                'prelacion_id'    => 3,
            ],
            [
                'materia_id'    => 12,
                'prelacion_id'    => 6,
            ],
            [
                'materia_id'    => 13,
                'prelacion_id'    => 6,
            ],
            [
                'materia_id'    => 14,
                'prelacion_id'    => 5,
            ],
            [
                'materia_id'    => 16,
                'prelacion_id'    => 11,
            ],
            [
                'materia_id'    => 17,
                'prelacion_id'    => 14,
            ],
            [
                'materia_id'    => 18,
                'prelacion_id'    => 13,
            ],
            [
                'materia_id'    => 19,
                'prelacion_id'    => 12,
            ],
            [
                'materia_id'    => 20,
                'prelacion_id'    => 14,
            ],
            [
                'materia_id'    => 21,
                'prelacion_id'    => 20,
            ],
            [
                'materia_id'    => 22,
                'prelacion_id'    => 17,
            ],
            [
                'materia_id'    => 23,
                'prelacion_id'    => 20,
            ],
            [
                'materia_id'    => 24,
                'prelacion_id'    => 18,
            ],
            [
                'materia_id'    => 25,
                'prelacion_id'    => 18,
            ],
            [
                'materia_id'    => 26,
                'prelacion_id'    => 16,
            ],
            [
                'materia_id'    => 27,
                'prelacion_id'    => 19,
            ],
            [
                'materia_id'    => 28,
                'prelacion_id'    => 21,
            ],
            [
                'materia_id'    => 29,
                'prelacion_id'    => 21,
            ],
            [
                'materia_id'    => 30,
                'prelacion_id'    => 23,
            ],
            [
                'materia_id'    => 31,
                'prelacion_id'    => 26,
            ],
            [
                'materia_id'    => 33,
                'prelacion_id'    => 24,
            ],
            [
                'materia_id'    => 34,
                'prelacion_id'    => 27,
            ],
            [
                'materia_id'    => 35,
                'prelacion_id'    => 32,
            ],
            [
                'materia_id'    => 36,
                'prelacion_id'    => 29,
            ],
            [
                'materia_id'    => 40,
                'prelacion_id'    => 34,
            ],
            [
                'materia_id'    => 41,
                'prelacion_id'    => 29,
            ],
            [
                'materia_id'    => 42,
                'prelacion_id'    => 35,
            ],
            [
                'materia_id'    => 43,
                'prelacion_id'    => 40,
            ],
            [
                'materia_id'    => 45,
                'prelacion_id'    => 38,
            ],
            [
                'materia_id'    => 46,
                'prelacion_id'    => 41,
            ],
            [
                'materia_id'    => 47,
                'prelacion_id'    => 42,
            ],
            [
                'materia_id'    => 48,
                'prelacion_id'    => 44,
            ],
            [
                'materia_id'    => 49,
                'prelacion_id'    => 43,
            ],
            [
                'materia_id'    => 50,
                'prelacion_id'    => 42,
            ],
            [
                'materia_id'    => 53,
                'prelacion_id'    => 48,
            ],
            [
                'materia_id'    => 56,
                'prelacion_id'    => 52,
            ],
            [
                'materia_id'    => 57,
                'prelacion_id'    => 45,
            ],
            [
                'materia_id'    => 58,
                'prelacion_id'    => 31,
            ],
            ];
        $posts = $this->table('prelaciones');
        $posts->insert($data)
              ->save();

    }
}
