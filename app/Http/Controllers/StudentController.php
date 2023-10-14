<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Lesson;
use App\Models\Teacher;
use App\Models\Comment;
use Auth;

class StudentController extends Controller
{
    public function top(Student $student)
    {
        $lesson = new Lesson();
        return view('students/top')->with(['lessons' => $lesson->getLatest()]); 
    }
    
     public function teacher(Teacher $teacher)
    {
        return view('students/teacher')->with(['teachers' => $teacher->getPaginateByLimit(1)]); 
    }
    
    public function comment(Comment $comment)
    {
        $user = Auth::user();
        $comments =  $comment->where('student_id', $user->id)->get();
        return view('students/comment')->with(['comments' => $comments]);
    }
    
    public function start(Student $student)
    {
        return view('students/start');
    }
}
