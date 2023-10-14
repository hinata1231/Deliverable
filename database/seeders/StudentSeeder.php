<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('students')->insert([
            'name'=> 'student1',
            'email'=>'student1@gmail',
            'password'=>Hash::make('password') ,
            'gender'=>1,
            'age'=>20,
            'teacher_id'=>1,
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            ]);
            
        DB::table('students')->insert([
            'name'=> 'student2',
            'email'=>'student2@gmail',
            'password'=>Hash::make('password') ,
            'gender'=>1,
            'age'=>20,
            'teacher_id'=>1,
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            ]);
            
        DB::table('students')->insert([
            'name'=> 'student3',
            'email'=>'student3@gmail',
            'password'=>Hash::make('password') ,
            'gender'=>1,
            'age'=>20,
            'teacher_id'=>1,
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            ]);
    }
}
