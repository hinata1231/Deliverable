<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class TeacherController extends Controller
{
    public function member(Teacher $teacher)
    {
        return view('teachers/member')->with(['teachers' => $teacher->getPaginateByLimit(1)]); 
    }
    
    public function comment(Student $student, Comment $comment)
    {
        return view('teachers/create')->with(['students'=> $student->get(), 'comments' => $comment->get()]); 
    }
    
    public function store(CommentRequest $request, Comment $comment)
    {
    
        $input = $request['comment'];
        $input['teacher_id'] = Auth::id();
        $comment->fill($input)->save();
        return back();
         
    }

}
