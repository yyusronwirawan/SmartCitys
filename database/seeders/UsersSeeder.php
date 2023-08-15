<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name' => 'user']);
        $role->givePermissionTo([
            'dashboard-C',
            'dashboard-R',
            'dashboard-U',
            'dashboard-D',
        ]);
        \App\Models\User::factory(50000)->create();
    }
}
