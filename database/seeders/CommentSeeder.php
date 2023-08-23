<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          DB::table('comments')->insert([
            'news'=>'次の授業ですること',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime(),
            
            ]);
        
    }
}
