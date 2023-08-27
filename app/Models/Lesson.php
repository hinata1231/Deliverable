<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
  
  public function teacher()
  
  {
      return $this->belongsTo(teacher::class); 
  }
  
   public function student_lessons()
   {
     return $this->hasMany(Student_Class::class);   
   }
}

