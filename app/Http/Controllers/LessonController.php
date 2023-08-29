<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    
    public function index(Lesson $lesson)
    {
       return view('lessons/index')->with(['lessons' => $lesson]); 
    }
}
