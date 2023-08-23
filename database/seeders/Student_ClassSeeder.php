<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\QueryException; 


class Student_ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('student_classes')->insert([
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]);
    }
}
