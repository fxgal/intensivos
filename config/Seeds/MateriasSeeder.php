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
                'nombre'    => 'Fundamentos de la Informática',
                'codigo'    => '345',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Formación Constitucional',
                'codigo'    => '15',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Inglés I',
                'codigo'    => '223',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Deporte',
                'codigo'    => '1482',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Lógica Matemática',
                'codigo'    => '345',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Matemática I',
                'codigo'    => '276',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Lenguaje y Comunicación',
                'codigo'    => '133',
                'semestre'  => '1',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Arte y Cultura',
                'codigo'    => '1478',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Inglés II',
                'codigo'    => '590',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Problemática Cientifica y Tecnológica',
                'codigo'    => '716',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Electiva I',
                'codigo'    => '656',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Física I',
                'codigo'    => '164',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Matemática II',
                'codigo'    => '134',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Algoritmos I',
                'codigo'    => '40',
                'semestre'  => '2',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Metodología y Técnicas de Investigación',
                'codigo'    => '13',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Electiva II',
                'codigo'    => '571',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Programación I',
                'codigo'    => '83',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Matemática III',
                'codigo'    => '172',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Física II',
                'codigo'    => '588',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Algoritmos II',
                'codigo'    => '679',
                'semestre'  => '3',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Estructuras Discretas I',
                'codigo'    => '362',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Base de Datos',
                'codigo'    => '209',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Programación II',
                'codigo'    => '454',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Probabilidades y Estadísticas',
                'codigo'    => '249',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Matemática IV',
                'codigo'    => '159',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Electiva III',
                'codigo'    => '229',
                'semestre'  => '4',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Organización del Computador',
                'codigo'    => '631',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Álgebra Booleana',
                'codigo'    => '537',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Estructuras Discretas II',
                'codigo'    => '827',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Programación III',
                'codigo'    => '264',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Electiva IV',
                'codigo'    => '125',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Teoría de Sistemas',
                'codigo'    => '180',
                'semestre'  => '5',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Investigación de Operaciones',
                'codigo'    => '122',
                'semestre'  => '6',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Arquitectura del Computador',
                'codigo'    => '17',
                'semestre'  => '6',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Sistemas de Información I',
                'codigo'    => '299',
                'semestre'  => '6',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Métodos numéricos',
                'codigo'    => '506',
                'semestre'  => '6',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Ingeniería Económica',
                'codigo'    => '873',
                'semestre'  => '6',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Control de Proyectos',
                'codigo'    => '267',
                'semestre'  => '7',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Organización y Gestión Empresarial',
                'codigo'    => '406',
                'semestre'  => '7',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Sistemas Operativos',
                'codigo'    => '313',
                'semestre'  => '7',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Traductores e Intérpretes',
                'codigo'    => '283',
                'semestre'  => '7',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Sistemas de Información II',
                'codigo'    => '755',
                'semestre'  => '7',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Redes',
                'codigo'    => '165',
                'semestre'  => '8',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Electiva de Área I',
                'codigo'    => '60',
                'semestre'  => '8',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Pasantía',
                'codigo'    => '435',
                'semestre'  => '8',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Lenguaje de Programación',
                'codigo'    => '66',
                'semestre'  => '8',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Sistemas de Información III',
                'codigo'    => '653',
                'semestre'  => '8',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Electiva de Área II',
                'codigo'    => '549',
                'semestre'  => '9',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Sistemas Distribuidos',
                'codigo'    => '859',
                'semestre'  => '9',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Ética Profesional',
                'codigo'    => '649',
                'semestre'  => '9',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Electiva Libre I',
                'codigo'    => '315',
                'semestre'  => '9',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Proyecto de Grado I',
                'codigo'    => '103',
                'semestre'  => '9',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Electiva de Área III',
                'codigo'    => '289',
                'semestre'  => '10',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Electiva Libre II',
                'codigo'    => '251',
                'semestre'  => '10',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Informática Educativa',
                'codigo'    => '427',
                'semestre'  => '10',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Proyecto de Grado II',
                'codigo'    => '697',
                'semestre'  => '10',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Gerencia de Proyecto',
                'codigo'    => '598',
                'semestre'  => '10',
                'created' => date('Y-m-d H:i:s'),
            ],
            [
                'nombre'    => 'Electiva V',
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
