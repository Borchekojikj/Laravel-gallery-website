<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'image' => 'https://images.pexels.com/photos/39396/hourglass-time-hours-sand-39396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'name' => 'Project 1',
                'subtitle' => 'Subtitle 1',
                'description' => 'Description of Project 1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://images.pexels.com/photos/39396/hourglass-time-hours-sand-39396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'name' => 'Project 2',
                'subtitle' => 'Subtitle 2',
                'description' => 'Description of Project 2',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://images.pexels.com/photos/39396/hourglass-time-hours-sand-39396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'name' => 'Project 3',
                'subtitle' => 'Subtitle 3',
                'description' => 'Description of Project 3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://images.pexels.com/photos/39396/hourglass-time-hours-sand-39396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'name' => 'Project 4',
                'subtitle' => 'Subtitle 4',
                'description' => 'Description of Project 4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://images.pexels.com/photos/39396/hourglass-time-hours-sand-39396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'name' => 'Project 5',
                'subtitle' => 'Subtitle 5',
                'description' => 'Description of Project 5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'image' => 'https://images.pexels.com/photos/39396/hourglass-time-hours-sand-39396.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
                'name' => 'Project 6',
                'subtitle' => 'Subtitle 6',
                'description' => 'Description of Project 6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('projects')->insert($projects);
    }
}
