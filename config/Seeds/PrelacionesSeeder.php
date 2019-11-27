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
                'prelacion_id'    => 'arte y cultura',
            ],
            [
                'materia_id'    => '9',
                'prelacion_id'    => 'ingles I',
            ],
            [
                'materia_id'    => '12',
                'prelacion_id'    => 'matematica I',
            ],
            [
                'materia_id'    => '13',
                'prelacion_id'    => 'matematica II',
            ],
            [
                'materia_id'    => '14',
                'prelacion_id'    => 'logica matematica',
            ],
            [
                'materia_id'    => '16',
                'prelacion_id'    => 'electiva I',
            ],
            [
                'materia_id'    => '17',
                'prelacion_id'    => 'algoritmos I',
            ],
            [
                'materia_id'    => '18',
                'prelacion_id'    => 'matematica II',
            ],
            [
                'materia_id'    => '19',
                'prelacion_id'    => 'fisica I',
            ],
            [
                'materia_id'    => '20',
                'prelacion_id'    => 'algoritmos I',
            ],
            [
                'materia_id'    => '21',
                'prelacion_id'    => 'algoritmos II',
            ],
            [
                'materia_id'    => '22',
                'prelacion_id'    => 'programacion I',
            ],
            [
                'materia_id'    => '23',
                'prelacion_id'    => 'algoritmos II',
            ],
            [
                'materia_id'    => '24',
                'prelacion_id'    => 'matematica III',
            ],
            [
                'materia_id'    => '25',
                'prelacion_id'    => 'matematica III',
            ],
            [
                'materia_id'    => '26',
                'prelacion_id'    => 'electiva II',
            ],
            [
                'materia_id'    => '27',
                'prelacion_id'    => 'fisica II',
            ],
            [
                'materia_id'    => '28',
                'prelacion_id'    => 'estructuras discretas I',
            ],
            [
                'materia_id'    => '29',
                'prelacion_id'    => 'estructuras discretas I',
            ],
            [
                'materia_id'    => '30',
                'prelacion_id'    => 'programacion II',
            ],
            [
                'materia_id'    => '31',
                'prelacion_id'    => 'electiva III',
            ],
            [
                'materia_id'    => '33',
                'prelacion_id'    => 'probabilidades y estadisticas',
            ],
            [
                'materia_id'    => '34',
                'prelacion_id'    => 'organizacion del computador',
            ],
            [
                'materia_id'    => '35',
                'prelacion_id'    => 'teoria de sistemas',
            ],
            [
                'materia_id'    => '36',
                'prelacion_id'    => 'estructuras discretas II',
            ],
            [
                'materia_id'    => '40',
                'prelacion_id'    => 'arquitectura del computador',
            ],
            [
                'materia_id'    => '41',
                'prelacion_id'    => 'estructuras discretas II',
            ],
            [
                'materia_id'    => '42',
                'prelacion_id'    => 'sistemas de informacion I',
            ],
            [
                'materia_id'    => '43',
                'prelacion_id'    => 'sistemas operativos',
            ],
            [
                'materia_id'    => '45',
                'prelacion_id'    => 'control de proyectos',
            ],
            [
                'materia_id'    => '46',
                'prelacion_id'    => 'traductores e interpretes',
            ],
            [
                'materia_id'    => '47',
                'prelacion_id'    => 'sistemas de informacion II',
            ],
            [
                'materia_id'    => '48',
                'prelacion_id'    => 'electiva de area I',
            ],
            [
                'materia_id'    => '49',
                'prelacion_id'    => 'redes',
            ],
            [
                'materia_id'    => '50',
                'prelacion_id'    => 'sistemas de informacion II',
            ],
            [
                'materia_id'    => '53',
                'prelacion_id'    => 'electiva de area II',
            ],
            [
                'materia_id'    => '56',
                'prelacion_id'    => 'proyecto de grado I',
            ],
            [
                'materia_id'    => '57',
                'prelacion_id'    => 'pasantia',
            ],
            [
                'materia_id'    => '58',
                'prelacion_id'    => 'electiva IV',
            ],
            ];
        $posts = $this->table('prelaciones');
        $posts->insert($data)
              ->save();

    }
}
