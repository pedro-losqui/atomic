<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;


class AcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'record.home']);
        Permission::create(['name' => 'record.update']);
        Permission::create(['name' => 'record.delete']);

        // create permissions
        Permission::create(['name' => 'user.home']);
        Permission::create(['name' => 'user.create']);
        Permission::create(['name' => 'user.update']);
        Permission::create(['name' => 'user.delete']);

        // create permissions
        Permission::create(['name' => 'exam.home']);
        Permission::create(['name' => 'exam.create']);
        Permission::create(['name' => 'exam.update']);
        Permission::create(['name' => 'exam.delete']);

        // create permissions
        Permission::create(['name' => 'message.home']);
        Permission::create(['name' => 'message.update']);

        // create permissions
        Permission::create(['name' => 'config.home']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Atendente']);
        $role1->givePermissionTo('record.home');
        $role1->givePermissionTo('record.update');
        $role1->givePermissionTo('record.delete');
        $role1->givePermissionTo('record.delete');
        $role1->givePermissionTo('message.home');
        $role1->givePermissionTo('message.update');

        $role2 = Role::create(['name' => 'Admin']);
        $role2->givePermissionTo('record.home');
        $role2->givePermissionTo('record.update');
        $role2->givePermissionTo('record.delete');
        $role2->givePermissionTo('record.delete');
        $role2->givePermissionTo('user.home');
        $role2->givePermissionTo('user.create');
        $role2->givePermissionTo('user.update');
        $role2->givePermissionTo('user.delete');
        $role2->givePermissionTo('exam.home');
        $role2->givePermissionTo('exam.create');
        $role2->givePermissionTo('exam.create');
        $role2->givePermissionTo('exam.update');
        $role2->givePermissionTo('exam.delete');
        $role2->givePermissionTo('message.home');
        $role2->givePermissionTo('message.update');
        $role2->givePermissionTo('config.home');

        $user = \App\Models\User::factory()->create([
            'name' => 'Administrador',
            'login' => 'admin',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
        ]);
        $user->assignRole($role2);
    }
}
