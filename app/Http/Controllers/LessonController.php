<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    
    public function index(Lesson $lesson)
    {
        return view('lessons/index')->with(['lessons' => $lesson->getLatest()]); 
    }
    
    public function show(Lesson $lesson)
    {
        return view('lessons.show')->with(['lessons' => $lesson]);
    }
    
    public function create(Student $student)
    {
        return view('lessons/create')->with(['students' => $student->get()]);
    }
    
    
     public function store(Request $request, Lesson $lesson)
    {
        $input = $request['lesson'];
        $datetime = $request['date'].' '.$request['time'];
        $input['datetime'] = $datetime;
        // $input['student_id'] =
        $input['teacher_id'] = Auth::id();
        $lesson->fill($input)->save();
        return redirect('/teacher/lessons/' . $lesson->id);
        
        
    }
 
}