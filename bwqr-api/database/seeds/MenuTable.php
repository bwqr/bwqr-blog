<?php

use Illuminate\Database\Seeder;
use App\Modules\Core\Menu;

class MenuTable extends Seeder
{
    public $entries;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->entries['articles'] = new Menu([
            'name' => [
                'tr' => 'Makaleler',
                'en' => 'Articles'
            ],
            'url' => '/articles',
            'tooltip' => [
                'tr' => 'Makaleleri Y\u00f6netiniz',
                'en' => 'Makaleleri Y\u00f6netiniz'
            ],
            'weight' => 3,
            'parent' => 0
        ]);

        $this->entries['home'] = new Menu([
            'name' => [
                'tr' => 'Sayfa',
                'en' => 'Home'
            ],
            'url' => '/',
            'tooltip' => [
                'tr' => '',
                'en' => ''
            ],
            'weight' => 1,
            'parent' => 0
        ]);

        $this->entries['images'] = new Menu([
            'name' => [
                'tr' => 'Foto\u011fraflar',
                'en' => 'Photos'
            ],
            'url' => '/images',
            'tooltip' => [
                'tr' => 'Alb\u00fcmlerinizi Y\u00f6netin',
                'en' => 'Alb\u00fcmlerinizi Y\u00f6netin'
            ],
            'weight' => 5,
            'parent' => 0
        ]);

        $this->entries['admin'] = new Menu([
            'name' => [
                'tr' => 'Admin Panel',
                'en' => 'Admin Panel'
            ],
            'url' => '/admin',
            'tooltip' => [
                'tr' => 'Sitenin genel ayarlar\u0131n\u0131 y\u00f6netin',
                'en' => 'Sitenin genel ayarlar\u0131n\u0131 y\u00f6netin'
            ],
            'weight' => 2,
            'parent' => 0
        ]);

        $this->entries['categories'] = new Menu([
            'name' => [
                'tr' => 'Kategoriler',
                'en' => 'Categories'
            ],
            'url' => '/categories',
            'tooltip' => [
                'tr' => 'kategoriler',
                'en' => 'categories'
            ],
            'weight' => 2,
            'parent' => 0
        ]);

        $this->entries['about-us'] = new Menu([
            'name' => [
                'tr' => 'Hakkımızda',
                'en' => 'About Us'
            ],
            'url' => '/about-us',
            'tooltip' => [
                'tr' => 'hakkımızda',
                'en' => 'about us'
            ],
            'weight' => 3,
            'parent' => 0
        ]);

        $this->entries['admin.menus'] = new Menu([
            'name' => [
                'tr' => 'Men\u00fc',
                'en' => 'Menu'
            ],
            'url' => '/admin/menus',
            'tooltip' => [
                'tr' => 'Men\u00fc elemanlar\u0131n\u0131 d\u00fczenleyin',
                'en' => 'Manage site menu items'
            ],
            'weight' => 0,
            'parent' => 4
        ]);

        $this->entries['admin.languages'] = new Menu([
            'name' => [
                'tr' => 'Dil',
                'en' => 'Language'
            ],
            'url' => '/admin/languages',
            'tooltip' => [
                'tr' => 'Dil se\u00e7eneklerini y\u00f6netin',
                'en' => 'Manage your site languages'
            ],
            'weight' => 1,
            'parent' => 4
        ]);

        $this->entries['admin.categories'] = new Menu([
            'name' => [
                'tr' => 'Kategori',
                'en' => 'Category'
            ],
            'url' => '/admin/categories',
            'tooltip' => [
                'tr' => 'Kategorileri y\u00f6netin',
                'en' => 'Manage site categories'
            ],
            'weight' => 2,
            'parent' => 4
        ]);

        $this->entries['admin.users'] = new Menu([
            'name' => [
                'tr' => 'Kullan\u0131c\u0131',
                'en' => 'User'
            ],
            'url' => '/admin/users',
            'tooltip' => [
                'tr' => 'Kullan\u0131c\u0131lar\u0131 y\u00f6netin',
                'en' => 'Manage site users'
            ],
            'weight' => 0,
            'parent' => 4
        ]);

        $this->entries['admin.permissions'] = new Menu([
            'name' => [
                'tr' => '\u0130zin',
                'en' => 'Permission'
            ],
            'url' => '/admin/permissions',
            'tooltip' => [
                'tr' => '30zinleri y\u00f6netin',
                'en' => 'Manage Permissions'
            ],
            'weight' => 6,
            'parent' => 4
        ]);

        $this->entries['admin.roles'] = new Menu([
            'name' => [
                'tr' => 'Rol',
                'en' => 'Role'
            ],
            'url' => '/admin/roles',
            'tooltip' => [
                'tr' => 'Rolleri y\u00f6net',
                'en' => 'Manage roles'
            ],
            'weight' => 5,
            'parent' => 4
        ]);

        $this->entries['dashboard'] = new Menu([
            'name' => [
                'tr' => 'Dashboard',
                'en' => 'Dashboard'
            ],
            'url' => '/',
            'tooltip' => [
                'tr' => 'K\u00fc\u00e7\u00fck ara\u00e7lar ile genel bak\u0131\u015f at\u0131n',
                'en' => 'View your gadget'
            ],
            'weight' => 0,
            'parent' => 0
        ]);
    }
}
