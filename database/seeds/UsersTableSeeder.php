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
            'name' => 'adolfo',
            'email' => 'ingadolfo@icloud.com',
            'password' => bcrypt('secret')
        ]);
    }
}
