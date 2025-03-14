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
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Socio']);
        $role3 = Role::create(['name' => 'Cliente']);

        Permission::create(['name' => 'admin.course','description'=>'Panel Curso'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.course.add','description'=>'Añadir Curso'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.course.edit','description'=>'Editar Curso'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.course.delete','description'=>'Eliminar Curso'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.add.role','description'=>'Lista Usuarios Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.add.role.user','description'=>'Editar Rol Usuario'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.role','description'=>'Lista de Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.role.add','description'=>'Añadir Rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.role.edit','description'=>'Editar Rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.role.delete','description'=>'Eliminar Rol'])->syncRoles([$role1]);
        
        Permission::create(['name' => 'Ver Cursos Contabilidad','description'=>'Ver Cursos Contabilidad'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'Ver Cursos Medicina','description'=>'Ver Cursos Medicina'])->syncRoles([$role1, $role2, $role3]);
        Permission::create(['name' => 'Ver Cursos Informatica','description'=>'Ver Cursos Informatica'])->syncRoles([$role1, $role2, $role3]);
    }
}
