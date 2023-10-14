<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
  
  protected $fillable = [
    'student_id',
    'teacher_id',
    'news',

  
  ];
    
  public function teacher()
  {
    return $this->belongsTo(teacher::class); 
  }
  
  public function student()
  {
    return $this->belongsTo(Student::class);
  }
}
