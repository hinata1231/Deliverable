<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('lessons')->insert([
            'zoom_url'=>'4567382837',
            'student_id' =>1,
            'teacher_id' =>1,
            'illegular'=>1,
            'datetime' => date('2023-01-01 19:00:00'),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]);
    
         DB::table('lessons')->insert([
            'zoom_url'=>'4567382837',
            'student_id' =>1,
            'teacher_id' =>2,
            'illegular'=>1,
            'datetime' => date('2023-01-06 19:00:00'),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]);
            
          DB::table('lessons')->insert([
            'zoom_url'=>'4567382837',
            'student_id' =>1,
            'teacher_id' =>3,
            'illegular'=>1,
            'datetime' => date('2023-01-08 20:00:00'),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]);
            
            
          DB::table('lessons')->insert([
            'zoom_url'=>'4567382837',
            'student_id' =>1,
            'teacher_id' =>1,
            'illegular'=>1,
            'datetime' => date('2023-01-10 22:00:00'),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]); 
            
             
          DB::table('lessons')->insert([
            'zoom_url'=>'4567382837',
            'student_id' =>1,
            'teacher_id' =>2,
            'illegular'=>1,
            'datetime' => date('2023-01-12 22:00:00'),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]); 
         
            
          DB::table('lessons')->insert([
            'zoom_url'=>'4567382837',
            'student_id' =>1,
            'teacher_id' =>3,
            'illegular'=>1,
            'datetime' => date('2023-01-20 20:00:00'),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]); 
            
            
          DB::table('lessons')->insert([
            'zoom_url'=>'4567382837',
            'student_id' =>1,
            'teacher_id' =>1,
            'illegular'=>1,
            'datetime' => date('2023-01-23 21:00:00'),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]); 
            
            
          DB::table('lessons')->insert([
            'zoom_url'=>'4567382837',
            'student_id' =>1,
            'teacher_id' =>2,
            'illegular'=>1,
            'datetime' => date('2023-01-25 19:00:00'),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]); 
            
             
          DB::table('lessons')->insert([
            'zoom_url'=>'4567382837',
            'student_id' =>1,
            'teacher_id' =>3,
            'illegular'=>1,
            'datetime' => date('2023-01-27 19:00:00'),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]); 
            
             
          DB::table('lessons')->insert([
            'zoom_url'=>'4567382837',
            'student_id' =>1,
            'teacher_id' =>1,
            'illegular'=>1,
            'datetime' => date('2023-01-30 20:00:00'),
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]); 
            
    }

}
