<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'berita-list',
           'berita-create',
           'berita-edit',
           'berita-delete',
           'kategori-list',
           'kategori-create',
           'kategori-edit',
           'kategori-delete',
           'utara-list',
           'utara-create',
           'utara-edit',
           'utara-delete',
           'timur-list',
           'timur-create',
           'timur-edit',
           'timur-delete',
           'barat-list',
           'barat-create',
           'barat-edit',
           'barat-delete',
           'tengah-list',
           'tengah-create',
           'tengah-edit',
           'tengah-delete',
           'selatan-list',
           'selatan-create',
           'selatan-edit',
           'selatan-delete',

        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
