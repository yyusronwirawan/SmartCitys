<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'admin']);
        $permissions1 = Permission::pluck('id','id')->all();
        $role1->syncPermissions($permissions1);
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ])->assignRole([$role1->id]);

        $role2 = Role::create(['name' => 'penulis']);
        $role2->givePermissionTo([
            // dashboard
            'dashboard-C',
            'dashboard-R',
            'dashboard-U',
            'dashboard-D',
            // about
            'about-C',
            'about-R',
            'about-U',
            'about-D',
            // smartcity
            'smartcity-C',
            'smartcity-R',
            'smartcity-U',
            'smartcity-D',
            // gallery
            'gallery-C',
            'gallery-R',
            'gallery-U',
            'gallery-D',
            // destination
            'destination-C',
            'destination-R',
            'destination-U',
            'destination-D',
            // news
            'news-C',
            'news-R',
            'news-U',
            'news-D',
            // culture
            'culture-C',
            'culture-R',
            'culture-U',
            'culture-D',
            // event
            'event-C',
            'event-R',
            'event-U',
            'event-D',
        ]);
        User::create([
            'name' => 'Penulis',
            'email' => 'penulis@test.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ])->assignRole([$role2->id]);
    }
}
