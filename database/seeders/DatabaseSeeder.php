<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(TeacherSeeder::class);
       $this->call(StudentSeeder::class);
       //$this->call(CommentSeeder::class);
       $this->call(LessonSeeder::class);
       //$this->call(Student_LessonSeeder::class);

    }
}
