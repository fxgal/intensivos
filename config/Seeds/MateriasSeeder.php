<?php


use Phinx\Seed\AbstractSeed;

class MateriasSeeder extends AbstractSeed
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
                'nombre'    => 'fundamentos de la informatica',
                'codigo'    => '345',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'formacion constitucional',
                'codigo'    => '15',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'ingles I',
                'codigo'    => '223',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'deporte',
                'codigo'    => '1482',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'logica matematica',
                'codigo'    => '345',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'matematica I',
                'codigo'    => '276',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'lenguaje y comunicacion',
                'codigo'    => '133',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'arte y cultura',
                'codigo'    => '1478',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'ingles II',
                'codigo'    => '590',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'problematica cientifica y tecnologica',
                'codigo'    => '716',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'electiva I',
                'codigo'    => '656',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'fisica I',
                'codigo'    => '164',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'matematica II',
                'codigo'    => '134',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'algoritmos I',
                'codigo'    => '40',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'metodologia y tecnicas de investigacion',
                'codigo'    => '13',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'electiva II',
                'codigo'    => '571',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'programacion I',
                'codigo'    => '83',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'matematica III',
                'codigo'    => '172',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'fisica II',
                'codigo'    => '588',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'algoritmos II',
                'codigo'    => '679',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'estructuras discretas I',
                'codigo'    => '362',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'base de datos',
                'codigo'    => '209',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'programacion II',
                'codigo'    => '454',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'probabilidades y estadisticas',
                'codigo'    => '249',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'matematica IV',
                'codigo'    => '159',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'electiva III',
                'codigo'    => '229',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'organizacion del computador',
                'codigo'    => '631',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'algebra booleana',
                'codigo'    => '537',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'estructuras discretas II',
                'codigo'    => '827',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'programacion III',
                'codigo'    => '264',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'electiva IV',
                'codigo'    => '125',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'teoria de sistemas',
                'codigo'    => '180',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'investigacion de operaciones',
                'codigo'    => '122',
                'semestre'  => '6',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'arquitectura del computador',
                'codigo'    => '17',
                'semestre'  => '6',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'sistemas de informacion I',
                'codigo'    => '299',
                'semestre'  => '6',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'metodos numericos',
                'codigo'    => '506',
                'semestre'  => '6',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'ingenieria economica',
                'codigo'    => '873',
                'semestre'  => '6',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'control de proyectos',
                'codigo'    => '267',
                'semestre'  => '7',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'organizacion y gestion empresarial',
                'codigo'    => '406',
                'semestre'  => '7',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'sistemas operativos',
                'codigo'    => '313',
                'semestre'  => '7',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'traductores e interpretes',
                'codigo'    => '283',
                'semestre'  => '7',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'sistemas de informacion II',
                'codigo'    => '755',
                'semestre'  => '7',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'redes',
                'codigo'    => '165',
                'semestre'  => '8',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'electiva de area I',
                'codigo'    => '60',
                'semestre'  => '8',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'pasantia',
                'codigo'    => '435',
                'semestre'  => '8',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'lenguaje de programacion',
                'codigo'    => '66',
                'semestre'  => '8',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'sistemas de informacion III',
                'codigo'    => '653',
                'semestre'  => '8',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'electiva de area II',
                'codigo'    => '549',
                'semestre'  => '9',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'sistemas distribuidos',
                'codigo'    => '859',
                'semestre'  => '9',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'etica profesional',
                'codigo'    => '649',
                'semestre'  => '9',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'electiva libre I',
                'codigo'    => '315',
                'semestre'  => '9',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'proyecto de grado I',
                'codigo'    => '103',
                'semestre'  => '9',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'electiva de area III',
                'codigo'    => '289',
                'semestre'  => '10',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'electiva libre II',
                'codigo'    => '251',
                'semestre'  => '10',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'informatica educativa',
                'codigo'    => '427',
                'semestre'  => '10',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'proyecto de grado II',
                'codigo'    => '697',
                'semestre'  => '10',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'gerencia de proyecto',
                'codigo'    => '598',
                'semestre'  => '10',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre_materia'    => 'electiva V',
                'codigo'    => '803',
                'semestre'  => '10',
                'created' => date('Y-m-d H:i:s'),
            ],
            ];
        $posts = $this->table('materias');
        $posts->insert($data)
              ->save();
    }
}
