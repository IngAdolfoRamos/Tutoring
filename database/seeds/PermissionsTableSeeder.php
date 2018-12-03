<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Permissions for students */
        //See all students
        Permission::create
        ([
            'name' => 'See students.',
            'slug' => 'students.index',
            'description' => 'See all students and some information generally.'
        ]);

        //See students details
        Permission::create
        ([
            'name' => 'Browse students details.',
            'slug' => 'students.show',
            'description' => 'Browse and see each students details individually.'
        ]);

        /* Permissions for reports */
        //See all reports
        Permission::create
        ([
            'name' => 'See reports',
            'slug' => 'reports.index',
            'description' => 'See all reports generally.'
        ]);

        //See reports details
        Permission::create
        ([
            'name' => 'Browse reports details.',
            'slug' => 'reports.show',
            'description' => 'Brose and see each report individually.'
        ]);

        //Create reports
        Permission::create
        ([
            'name' => 'Create reports.',
            'slug' => 'reports.create',
            'description' => 'Create a new report.'
        ]);

        //Edit reports
        Permission::create
        ([
            'name' => 'Edit reports.',
            'slug' => 'reports.edit',
            'description' => 'Edit reports data.'
        ]);

        //Download reports
        Permission::create
        ([
            'name' => 'Download reports.',
            'slug' => 'reports.download',
            'description' => 'Download reports for any student.'
        ]);
    }
}
