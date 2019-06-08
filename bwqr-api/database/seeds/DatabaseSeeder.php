<?php

require('MenuTable.php');
require('RoleTable.php');
require('UserTable.php');

use Illuminate\Database\Seeder;
use App\Modules\Core\UserData;
use App\Modules\Core\MenuRole;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new UserTable();
        $user->run();

        $menu = new MenuTable();
        $menu->run();

        $role = new RoleTable();
        $role->run();

        $language = new LanguageTable();
        $language->run();

        $this->saveAll([$user, $menu, $role, $language ]);

        $this->createUserData($user->entries['user']->user_id, $role->entries['admin']->id);

        $this->createMenuRole($menu->entries['articles']->id, $role->entries['admin']->id);
        $this->createMenuRole($menu->entries['articles']->id, $role->entries['agency']->id);

        $this->createMenuRole($menu->entries['home']->id, $role->entries['guest']->id);

        $this->createMenuRole($menu->entries['categories']->id, $role->entries['guest']->id);

        $this->createMenuRole($menu->entries['about-us']->id, $role->entries['guest']->id);

        $this->createMenuRole($menu->entries['images']->id, $role->entries['admin']->id);
        $this->createMenuRole($menu->entries['images']->id, $role->entries['agency']->id);

        $this->createMenuRole($menu->entries['admin']->id, $role->entries['admin']->id);
        $this->createMenuRole($menu->entries['admin.menus']->id, $role->entries['admin']->id);
        $this->createMenuRole($menu->entries['admin.categories']->id, $role->entries['admin']->id);
        $this->createMenuRole($menu->entries['admin.languages']->id, $role->entries['admin']->id);
        $this->createMenuRole($menu->entries['admin.users']->id, $role->entries['admin']->id);
        $this->createMenuRole($menu->entries['admin.permissions']->id, $role->entries['admin']->id);
        $this->createMenuRole($menu->entries['admin.roles']->id, $role->entries['admin']->id);

        $this->createMenuRole($menu->entries['dashboard']->id, $role->entries['admin']->id);
        $this->createMenuRole($menu->entries['dashboard']->id, $role->entries['agency']->id);
    }

    private function saveAll($to_save)
    {
      foreach ($to_save as $key => $save_one) {
        foreach ($save_one->entries as $key => $save) {
          $save->save();
        }
      }
    }

    private function createUserData($user_id, $role_id)
    {
      return (new UserData([
        'user_id' => $user_id,
        'role_id' => $role_id
      ]))->save();
    }

    private function createMenuRole($menu_id, $role_id)
    {
      return (new MenuRole([
        'menu_id' => $menu_id,
        'role_id' => $role_id
      ]))->save();
    }
}
