<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create
        ([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Have total access and control over the entire system',
            'special' => 'all-access'
        ]);

        Role::create
        ([
            'name' => 'Tutor',
            'slug' => 'tutor',
            'description' => 'Can create and edit reports, and see all the information.',
        ]);

        Role::create
        ([
            'name' => 'Teacher',
            'slug' => 'teacher',
            'description' => 'Can see all the reports and all the information.',
        ]);

        Role::create
        ([
            'name' => 'Student',
            'slug' => 'student',
            'description' => 'Can see its own public academic information.',
        ]);
    }
}
