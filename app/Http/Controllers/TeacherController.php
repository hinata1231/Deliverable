<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;


class TeacherController extends Controller
{
    public function index(Teacher $teacher)
    {
       return view('teachers/index')->with(['teachers' => $teacher->getPaginateByLimit(1)]); 
    }

}


