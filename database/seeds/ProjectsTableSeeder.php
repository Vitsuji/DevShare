<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder {

    public function run()
    {

        Project::create(array(
            'id' => '1',
            'title' => 'Vitsuji Gang',
            'slug' => 'vitsuji-gang',
            'user_id'  => '1',
            'cover_img' => 'potato.jpg',
            'description'     => 'fblah blah blah blah, blah blah blah',
            'collaborators'  => '3',
            'tags' => 'Spicy',
            'github_repo' => 'www.github.com/Vitsuji',
            'prototype' => 'www.meow.org'
        ));

        Project::create(array(
            'id' => '2',
            'title' => 'Vitsuji Gang',
            'slug' => 'vitsuji-gang2',
            'user_id'  => '2',
            'cover_img' => 'potato.jpg',
            'description'     => 'fblah blah blah blah, blah blah blah',
            'collaborators'  => '3',
            'tags' => 'Spicy',
            'github_repo' => 'www.github.com/Vitsuji',
            'prototype' => 'www.meow.org'
        ));

        Project::create(array(
            'id' => '3',
            'title' => 'Vitsuji Gang',
            'slug' => 'vitsuji-gang3',
            'user_id'  => '2',
            'cover_img' => 'potato.jpg',
            'description'     => 'fblah blah blah blah, blah blah blah',
            'collaborators'  => '3',
            'tags' => 'Spicy',
            'github_repo' => 'www.github.com/Vitsuji',
            'prototype' => 'www.meow.org'
        ));

        Project::create(array(
            'id' => '4',
            'title' => 'Vitsuji Gang',
            'slug' => 'vitsuji-gang4',
            'user_id'  => '4',
            'cover_img' => 'potato.jpg',
            'description'     => 'fblah blah blah blah, blah blah blah',
            'collaborators'  => '3',
            'tags' => 'Spicy',
            'github_repo' => 'www.github.com/Vitsuji',
            'prototype' => 'www.meow.org'
        ));
    }

}