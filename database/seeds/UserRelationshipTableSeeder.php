<?php

use Illuminate\Database\Seeder;
use App\UserRelationship;

class UserRelationshipTableSeeder extends Seeder {

    public function run()
    {
        // Empty all previous records out
        DB::table('user_relationships')->delete();

        // User with ID 1 is following user with ID 2
        UserRelationship::create(array(
            'followee_id'     => '1',
            'follower_id' => '2',
        ));

        // User with ID 2 is following user with ID 3
        UserRelationship::create(array(
            'followee_id'     => '2',
            'follower_id' => '3',
        ));

        // User with ID 3 is following user with ID 4
        UserRelationship::create(array(
            'followee_id'     => '3',
            'follower_id' => '4',
        ));

        // User with ID 4 is following user with ID 1
        UserRelationship::create(array(
            'followee_id'     => '4',
            'follower_id' => '1',
        ));
    }

}