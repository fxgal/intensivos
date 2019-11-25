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
                'id_materia'    => 2,
                'prelacion'    => 'arte y cultura',
            ],
            [
                'id_materia'    => '9',
                'prelacion'    => 'ingles I',
            ],
            [
                'id_materia'    => '12',
                'prelacion'    => 'matematica I',
            ],
            [
                'id_materia'    => '13',
                'prelacion'    => 'matematica II',
            ],
            [
                'id_materia'    => '14',
                'prelacion'    => 'logica matematica',
            ],
            [
                'id_materia'    => '16',
                'prelacion'    => 'electiva I',
            ],
            [
                'id_materia'    => '17',
                'prelacion'    => 'algoritmos I',
            ],
            [
                'id_materia'    => '18',
                'prelacion'    => 'matematica II',
            ],
            [
                'id_materia'    => '19',
                'prelacion'    => 'fisica I',
            ],
            [
                'id_materia'    => '20',
                'prelacion'    => 'algoritmos I',
            ],
            [
                'id_materia'    => '21',
                'prelacion'    => 'algoritmos II',
            ],
            [
                'id_materia'    => '22',
                'prelacion'    => 'programacion I',
            ],
            [
                'id_materia'    => '23',
                'prelacion'    => 'algoritmos II',
            ],
            [
                'id_materia'    => '24',
                'prelacion'    => 'matematica III',
            ],
            [
                'id_materia'    => '25',
                'prelacion'    => 'matematica III',
            ],
            [
                'id_materia'    => '26',
                'prelacion'    => 'electiva II',
            ],
            [
                'id_materia'    => '27',
                'prelacion'    => 'fisica II',
            ],
            [
                'id_materia'    => '28',
                'prelacion'    => 'estructuras discretas I',
            ],
            [
                'id_materia'    => '29',
                'prelacion'    => 'estructuras discretas I',
            ],
            [
                'id_materia'    => '30',
                'prelacion'    => 'programacion II',
            ],
            [
                'id_materia'    => '31',
                'prelacion'    => 'electiva III',
            ],
            [
                'id_materia'    => '33',
                'prelacion'    => 'probabilidades y estadisticas',
            ],
            [
                'id_materia'    => '34',
                'prelacion'    => 'organizacion del computador',
            ],
            [
                'id_materia'    => '35',
                'prelacion'    => 'teoria de sistemas',
            ],
            [
                'id_materia'    => '36',
                'prelacion'    => 'estructuras discretas II',
            ],
            [
                'id_materia'    => '40',
                'prelacion'    => 'arquitectura del computador',
            ],
            [
                'id_materia'    => '41',
                'prelacion'    => 'estructuras discretas II',
            ],
            [
                'id_materia'    => '42',
                'prelacion'    => 'sistemas de informacion I',
            ],
            [
                'id_materia'    => '43',
                'prelacion'    => 'sistemas operativos',
            ],
            [
                'id_materia'    => '45',
                'prelacion'    => 'control de proyectos',
            ],
            [
                'id_materia'    => '46',
                'prelacion'    => 'traductores e interpretes',
            ],
            [
                'id_materia'    => '47',
                'prelacion'    => 'sistemas de informacion II',
            ],
            [
                'id_materia'    => '48',
                'prelacion'    => 'electiva de area I',
            ],
            [
                'id_materia'    => '49',
                'prelacion'    => 'redes',
            ],
            [
                'id_materia'    => '50',
                'prelacion'    => 'sistemas de informacion II',
            ],
            [
                'id_materia'    => '53',
                'prelacion'    => 'electiva de area II',
            ],
            [
                'id_materia'    => '56',
                'prelacion'    => 'proyecto de grado I',
            ],
            [
                'id_materia'    => '57',
                'prelacion'    => 'pasantia',
            ],
            [
                'id_materia'    => '58',
                'prelacion'    => 'electiva IV',
            ],
            ];
        $posts = $this->table('prelaciones');
        $posts->insert($data)
              ->save();

    }
}
