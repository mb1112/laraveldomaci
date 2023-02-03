<?php

namespace Database\Seeders;

use App\Models\Ispit;
use App\Models\Predmet;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Student::truncate();
        Predmet::truncate();
        Ispit::truncate();

        Student::factory()
        ->count(10)
        ->create();

        Predmet::factory()
        ->count(10)
        ->create();

        Ispit::factory()
        ->count(10)
        ->create();
    }
}