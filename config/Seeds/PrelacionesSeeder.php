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
                'prelacion_id'    => 2,
                'materia_id'    => 'Arte y Cultura',
            ],
            [
                'prelacion_id'    => 9,
                'materia_id'    => 'Inglés I',
            ],
            [
                'prelacion_id'    => 12,
                'materia_id'    => 'Matemática I',
            ],
            [
                'prelacion_id'    => 13,
                'materia_id'    => 'Matemática II',
            ],
            [
                'prelacion_id'    => 14,
                'materia_id'    => 'Lógica Matemática',
            ],
            [
                'prelacion_id'    => 16,
                'materia_id'    => 'Electiva I',
            ],
            [
                'prelacion_id'    => 17,
                'materia_id'    => 'Algoritmos I',
            ],
            [
                'prelacion_id'    => 18,
                'materia_id'    => 'Matematica II',
            ],
            [
                'prelacion_id'    => 19,
                'materia_id'    => 'Física I',
            ],
            [
                'prelacion_id'    => 20,
                'materia_id'    => 'algoritmos I',
            ],
            [
                'prelacion_id'    => 21,
                'materia_id'    => 'Algoritmos II',
            ],
            [
                'prelacion_id'    => 22,
                'materia_id'    => 'Programación I',
            ],
            [
                'prelacion_id'    => 23,
                'materia_id'    => 'Algoritmos II',
            ],
            [
                'prelacion_id'    => 24,
                'materia_id'    => 'Matemática III',
            ],
            [
                'prelacion_id'    => 25,
                'materia_id'    => 'Matemática III',
            ],
            [
                'prelacion_id'    => 26,
                'materia_id'    => 'Electiva II',
            ],
            [
                'prelacion_id'    => 27,
                'materia_id'    => 'Física II',
            ],
            [
                'prelacion_id'    => 28,
                'materia_id'    => 'Estructuras Discretas I',
            ],
            [
                'prelacion_id'    => 29,
                'materia_id'    => 'Estructuras Discretas I',
            ],
            [
                'prelacion_id'    => 30,
                'materia_id'    => 'Programación II',
            ],
            [
                'prelacion_id'    => 31,
                'materia_id'    => 'Electiva III',
            ],
            [
                'prelacion_id'    => 33,
                'materia_id'    => 'Probabilidades y Estadísticas',
            ],
            [
                'prelacion_id'    => 34,
                'materia_id'    => 'Organización del Computador',
            ],
            [
                'prelacion_id'    => 35,
                'materia_id'    => 'Teoria de Sistemas',
            ],
            [
                'prelacion_id'    => 36,
                'materia_id'    => 'Estructuras Discretas II',
            ],
            [
                'prelacion_id'    => 40,
                'materia_id'    => 'Arquitectura del Computador',
            ],
            [
                'prelacion_id'    => 41,
                'materia_id'    => 'Estructuras Discretas II',
            ],
            [
                'prelacion_id'    => 42,
                'materia_id'    => 'Sistemas de Información I',
            ],
            [
                'prelacion_id'    => 43,
                'materia_id'    => 'Sistemas Operativos',
            ],
            [
                'prelacion_id'    => 45,
                'materia_id'    => 'Control de Proyectos',
            ],
            [
                'prelacion_id'    => 46,
                'materia_id'    => 'Traductores e Intérpretes',
            ],
            [
                'prelacion_id'    => 47,
                'materia_id'    => 'Sistemas de Información II',
            ],
            [
                'prelacion_id'    => 48,
                'materia_id'    => 'Electiva de Área I',
            ],
            [
                'prelacion_id'    => 49,
                'materia_id'    => 'Redes',
            ],
            [
                'prelacion_id'    => 50,
                'materia_id'    => 'Sistemas de Información II',
            ],
            [
                'prelacion_id'    => 53,
                'materia_id'    => 'Electiva de Área II',
            ],
            [
                'prelacion_id'    => 56,
                'materia_id'    => 'Proyecto de Grado I',
            ],
            [
                'prelacion_id'    => 57,
                'materia_id'    => 'Pasantía',
            ],
            [
                'prelacion_id'    => 58,
                'materia_id'    => 'Electiva IV',
            ],
            ];
        $posts = $this->table('prelaciones');
        $posts->insert($data)
              ->save();

    }
}
