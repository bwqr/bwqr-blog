<?php

use Illuminate\Database\Seeder;
use App\Modules\Core\Role;

class RoleTable extends Seeder
{
    public $entries;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $this->entries['admin'] = new Role([
        'name' => 'Admin',
        'slug' => 'admin',
        'description' => 'Admin her şeyi kontrol et',
      ]);

      $this->entries['agency'] = new Role([
        'name' => 'Agency',
        'slug' => 'agency',
        'description' => 'Yazar düşünceyi kontrol eder',
      ]);

      $this->entries['guest'] = new Role([
        'name' => 'Guest',
        'slug' => 'guest',
        'description' => 'Misafir düşünceyi harmanlar',
      ]);
    }
}
