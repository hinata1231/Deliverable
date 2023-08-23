<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
  
  public function teacher()
  
  {
      return $this->belongsTo(teacher::class); 
  }
  
   public function student_classes()
   {
     return $this->hasMany(Student_Class::class);   
   }
}

