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
            'date' => date('2023-01-01 00:00:00'),
            'day'=>1,
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]);
          
}

}
