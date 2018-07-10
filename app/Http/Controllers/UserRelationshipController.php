<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserRelationshipController extends Controller
{
    // Test!
    // Make user one follow user 2 (does not check if already following)
    public function userOneFollowsTwo()
    {   
        // Find user with ID 1
        $user1 = User::find(1);

        // Find user with ID 2
        $user2 = User::find(2);

        if ($user1 && $user2) {
            $user1->following()->save($user2);
        }
    }

    // Get all user two followers (if previous method run it should return user 1)
    public function getUserTwoFollowers()
    {
        // Find user with ID 2
        $user2 = User::find(2);

        if ($user2) {
            foreach ($user2->followers as $follower) {
                echo 'here: '.$follower->name . "<br />";
            }
        }
    }
}
