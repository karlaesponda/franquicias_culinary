<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //Roles
        $admin = Role::create(['name' => 'Administrator']);
        $author = Role::create(['name' => 'Author']);

        //Permisos
        Permission::create(['name' => 'admin.index',
                            'description' => 'Ver el dashboard'])->syncRoles([$admin,$author]);

        //Franquicias
        Permission::create(['name'=> 'franquicias.index',
                            'description'=> 'Ver franquicias'])->syncRoles([$admin,$author]);
        Permission::create(['name'=> 'franquicias.create',
                            'description'=> 'Crear franquicias'])->syncRoles([$admin,$author]);
        Permission::create(['name'=> 'franquicias.edit',
                            'description'=> 'Editar franquicias'])->syncRoles([$admin,$author]);
        Permission::create(['name'=> 'franquicias.destroy',
                            'description'=> 'Eliminar franquicias'])->syncRoles([$admin,$author]);    

        //Comentarios
        Permission::create(['name'=> 'comments.index',
                            'description'=> 'Ver comentarios'])->syncRoles([$admin,$author]);
        Permission::create(['name'=> 'comments.destroy',
                            'description'=> 'Eliminar comentarios'])->syncRoles([$admin,$author]);
        //usuarios
        Permission::create(['name'=> 'users.index',
                            'description'=> 'Ver usuarios'])->syncRoles([$admin]);
        Permission::create(['name'=> 'users.edit',
                            'description'=> 'Editar usuarios'])->syncRoles([$admin]);
        Permission::create(['name'=> 'users.destroy',
                            'description'=> 'Eliminar usuarios'])->syncRoles([$admin]);

        //Roles
        Permission::create(['name'=> 'roles.index',
                            'description'=> 'Ver roles'])->syncRoles([$admin]);
        Permission::create(['name'=> 'roles.create',
                            'description'=> 'Crear roles'])->syncRoles([$admin]);
        Permission::create(['name'=> 'roles.edit',
                            'description'=> 'Editar roles'])->syncRoles([$admin]);
        Permission::create(['name'=> 'roles.destroy',
                            'description'=> 'Eliminar roles'])->syncRoles([$admin]);  
    }
}
