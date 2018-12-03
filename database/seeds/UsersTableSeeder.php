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
        $adolfo = User::create
        ([
            'record' => '201514076',
            'name' => 'Adolfo Ramos',
            'email' => 'ingadolfo@icloud.com',
            'password' => bcrypt('secret')
        ]);

        $adolfo = User::create
        ([
            'record' => '201514077',
            'name' => 'Ismael Rayon',
            'email' => 'isma@me.com',
            'password' => bcrypt('secret')
        ]);
    }
}
