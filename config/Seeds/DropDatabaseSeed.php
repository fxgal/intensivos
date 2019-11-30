<?php
use Migrations\AbstractSeed;

/**
 * DropDatabase seed.
 */
class DropDatabaseSeed extends AbstractSeed
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
      $this->execute('SET FOREIGN_KEY_CHECKS = 0');
      $this->execute('DROP TABLE IF EXISTS phinxlog');
      $this->execute('DROP TABLE IF EXISTS configuraciones');
      $this->execute('DROP TABLE IF EXISTS roles');
      $this->execute('DROP TABLE IF EXISTS personas');
      $this->execute('DROP TABLE IF EXISTS usuarios');
      $this->execute('SET FOREIGN_KEY_CHECKS = 1');
    }
}
