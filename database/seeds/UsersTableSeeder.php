<?php

use \App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $janeli = User::create
        ([
            'record' => '201514080',
            'name' => 'Janeli',
            'email' => 'janeli@me.com',
            'password' => bcrypt('secret')
        ]);

        $virginia = User::create
        ([
            'record' => '201514079',
            'name' => 'Virginia Aguilar',
            'email' => 'virginia@me.com',
            'password' => bcrypt('secret')
        ]);

        $adan = User::create
        ([
            'record' => '201514078',
            'name' => 'Adan',
            'email' => 'adan@me.com',
            'password' => bcrypt('secret')
        ]);

        $elizabeth = User::create
        ([
            'record' => '201514077',
            'name' => 'Elizabeth',
            'email' => 'elizabeth@me.com',
            'password' => bcrypt('secret')
        ]);

        $adolfo = User::create
        ([
            'record' => '201514076',
            'name' => 'Adolfo Ramos',
            'email' => 'adolfo@me.com',
            'password' => bcrypt('secret')
        ]);
    }
}
