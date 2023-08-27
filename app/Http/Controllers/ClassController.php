<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    
    public function index(Classe $class)
    {
       return view('teachers/index')->with(['teachers' => $teacher->getPaginateByLimit(1)]); 
    }
}
