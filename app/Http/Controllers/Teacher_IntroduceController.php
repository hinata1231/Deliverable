<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;


class Teacher_IntroduceController extends Controller
{
    public function teacher_introduce(Teacher $post)
    {
       return view('classe/teacher_introduce')->with(['posts' => $post->getPaginateByLimit(1)]); 
    }

}


