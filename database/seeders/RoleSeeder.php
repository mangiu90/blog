<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);

        Permission::create([
            'name' => 'admin.home',
            'description' => 'Ver el Dashboard'
        ])
            ->syncRoles([$role1, $role2]);

        Permission::create([
            'name' => 'admin.users.index',
            'description' => 'Ver listado de Usuarios'
        ])
            ->assignRole($role1);
        Permission::create([
            'name' => 'admin.users.edit',
            'description' => 'Asignar un Rol'
        ])
            ->assignRole($role1);

        Permission::create([
            'name' => 'admin.roles.index',
            'description' => 'Ver listado de Roles'
        ])
            ->assignRole($role1);
        Permission::create([
            'name' => 'admin.roles.edit',
            'description' => 'Editar Rol'
        ])
            ->assignRole($role1);

        Permission::create([
            'name' => 'admin.categories.index',
            'description' => 'Ver listado de Categorias'
        ])
            ->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.categories.create',
            'description' => 'Crear Categorias'
        ])
            ->assignRole($role1);
        Permission::create([
            'name' => 'admin.categories.edit',
            'description' => 'Editar Categorias'
        ])
            ->assignRole($role1);
        Permission::create([
            'name' => 'admin.categories.destroy',
            'description' => 'Eliminar Categorias'
        ])
            ->assignRole($role1);

        Permission::create([
            'name' => 'admin.tags.index',
            'description' => 'Ver listado de Etiquetas'
        ])
            ->assignRole($role1);
        Permission::create([
            'name' => 'admin.tags.create',
            'description' => 'Crear Etiquetas'
        ])
            ->assignRole($role1);
        Permission::create([
            'name' => 'admin.tags.edit',
            'description' => 'Editar Etiquetas'
        ])
            ->assignRole($role1);
        Permission::create([
            'name' => 'admin.tags.destroy',
            'description' => 'Eliminar Etiquetas'
        ])
            ->assignRole($role1);

        Permission::create([
            'name' => 'admin.posts.index',
            'description' => 'Ver listado de Posts'
        ])
            ->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.posts.create',
            'description' => 'Crear Posts'
        ])
            ->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.posts.edit',
            'description' => 'Editar Posts'
        ])
            ->syncRoles([$role1, $role2]);
        Permission::create([
            'name' => 'admin.posts.destroy',
            'description' => 'Eliminar Posts'
        ])
            ->syncRoles([$role1, $role2]);
    }
}
