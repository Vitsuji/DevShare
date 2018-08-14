<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        // Empty all previous records out
        DB::table('projects')->delete();

        DB::table('user_relationships')->delete();

        DB::table('users')->delete();

        User::create(array(
            'id' => '1',
            'name'  => 'name1',
            'email'     => 'foo@bar.com',
            'password'  => 'password',
            'remember_token' => 'UserOne'
        ));

        User::create(array(
            'id' => '2',
            'name'  => 'name2',
            'email'     => 'foo2@bar.com',
            'password'  => 'password',
            'remember_token' => 'UseTwo'
        ));

        User::create(array(
            'id' => '3',
            'name'  => 'name3',
            'email'     => 'foo3@bar.com',
            'password'  => 'password',
            'remember_token' => 'Usehree'
        ));

        User::create(array(
            'id' => '4',
            'name'  => 'name4',
            'email'     => 'foo4@bar.com',
            'password'  => 'password',
            'remember_token' => 'Useour'
        ));
    }

}