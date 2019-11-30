<?php
use Migrations\AbstractSeed;

/**
 * Configuraciones seed.
 */
class ConfiguracionesSeed extends AbstractSeed
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
        $this->execute('TRUNCATE TABLE configuraciones');

        $data = [
          [
              'nombre'        => "Cantidad mínima para ofertar en Intensivos",
              'clave'         => "cantidad_censo",
              'valor'         => "20",
              'modified'       => date('Y-m-d H:i:s'),
              'created'       => date('Y-m-d H:i:s'),
          ],
          [
              'nombre'        => "Valor de la UC",
              'clave'         => "valor_uc",
              'valor'         => "5000",
              'modified'       => date('Y-m-d H:i:s'),
              'created'       => date('Y-m-d H:i:s'),
          ]
        ];
        $table = $this->table('configuraciones');
        $table->insert($data)->save();
    }
}
