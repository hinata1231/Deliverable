<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Lesson extends Model
{
    use HasFactory;
    
  public function student()
  {
      return $this->belongsTo(Student::class);
  }
  public function lesson()
  {
      return $this->belongsTo(Lesson::class);
  }
}
