<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder {

    public function run()
    {

        Project::create(array(
            'id' => '1',
            'author_id'  => '1',
            'description'     => 'fblah blah blah blah, blah blah blah',
            'collaborators'  => '3',
            'tags' => 'Spicy',
            'github_repo' => 'www.github.com/Vitsuji',
            'prototype' => 'www.meow.org'
        ));

        Project::create(array(
            'id' => '2',
            'author_id'  => '2',
            'description'     => 'fblah blah blah blah, blah blah blah',
            'collaborators'  => '3',
            'tags' => 'Spicy',
            'github_repo' => 'www.github.com/Vitsuji',
            'prototype' => 'www.meow.org'
        ));

        Project::create(array(
            'id' => '3',
            'author_id'  => '2',
            'description'     => 'fblah blah blah blah, blah blah blah',
            'collaborators'  => '3',
            'tags' => 'Spicy',
            'github_repo' => 'www.github.com/Vitsuji',
            'prototype' => 'www.meow.org'
        ));

        Project::create(array(
            'id' => '4',
            'author_id'  => '4',
            'description'     => 'fblah blah blah blah, blah blah blah',
            'collaborators'  => '3',
            'tags' => 'Spicy',
            'github_repo' => 'www.github.com/Vitsuji',
            'prototype' => 'www.meow.org'
        ));
    }

}