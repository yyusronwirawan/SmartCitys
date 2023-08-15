<?php

namespace Database\Seeders;

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
            // dashboard
            'dashboard-C',
            'dashboard-R',
            'dashboard-U',
            'dashboard-D',
            // role
            'role-C',
            'role-R',
            'role-U',
            'role-D',
            // permission
            'permission-C',
            'permission-R',
            'permission-U',
            'permission-D',
            // user
            'user-C',
            'user-R',
            'user-U',
            'user-D',
            // website configuration
            'website-C',
            'website-R',
            'website-U',
            'website-D',
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
            // contact
            'contact-C',
            'contact-R',
            'contact-U',
            'contact-D',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
