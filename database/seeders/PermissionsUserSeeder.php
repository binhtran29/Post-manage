<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'show all category']);
        Permission::create(['name' => 'create category']);
        Permission::create(['name' => 'store category']);
        Permission::create(['name' => 'show one category']);
        Permission::create(['name' => 'edit category']);
        Permission::create(['name' => 'update category']);
        Permission::create(['name' => 'delete category']);

        Permission::create(['name' => 'show all user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'store user']);
        Permission::create(['name' => 'show one user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'update user']);
        Permission::create(['name' => 'delete user']);

        Permission::create(['name' => 'show all post']);
        Permission::create(['name' => 'create post']);
        Permission::create(['name' => 'store post']);
        Permission::create(['name' => 'show one post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'update post']);
        Permission::create(['name' => 'delete post']);
        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'writer']);
        $role1->givePermissionTo('show all post');
        $role1->givePermissionTo('create post');
        $role1->givePermissionTo('store post');
        $role1->givePermissionTo('show one post');
        $role1->givePermissionTo('edit post');
        $role1->givePermissionTo('update post');
        $role1->givePermissionTo('delete post');

        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('show all post');
        $role2->givePermissionTo('create post');
        $role2->givePermissionTo('store post');
        $role2->givePermissionTo('show one post');
        $role2->givePermissionTo('edit post');
        $role2->givePermissionTo('update post');
        $role2->givePermissionTo('delete post');
        
        $role2->givePermissionTo('show all user');
        $role2->givePermissionTo('show one user');
        $role2->givePermissionTo('edit user');
        $role2->givePermissionTo('update user');


        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = \App\Models\User::factory()->create([
            'name' => 'writer no.1',
            'email' => 'w1',
            'password' => 'a'
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Admin level 1',
            'email' => 'ad1',
            'password' => 'a'
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'super',
            'password' => 'a'
        ]);
        $user->assignRole($role3);
    }
}
