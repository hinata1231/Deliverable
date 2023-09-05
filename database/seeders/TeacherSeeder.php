<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use DateTime;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name'=> 'teacher1',
            'email'=>'teacher1@gmail',
            'password'=>Hash::make('password') ,
            'gender'=>1,
            'age'=>20,
            'sentence'=>400,
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            ]);
             
        DB::table('teachers')->insert([
            'name'=> 'teacher2',
            'email'=>'teacher2@gmail',
            'password'=>Hash::make('password') ,
            'gender'=>2,
            'age'=>20,
            'sentence'=>400,
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            ]);
        
        DB::table('teachers')->insert([
            'name'=> 'teacher3',
            'email'=>'teacher3@gmail',
            'password'=>Hash::make('password') ,
            'gender'=>1,
            'age'=>20,
            'sentence'=>400,
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            ]);
    }
}
