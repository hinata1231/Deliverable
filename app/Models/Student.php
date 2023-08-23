<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    public function teacher()
    
    {
     return $this->belongsTo(Teacher::class);
    }
    
    public function student_classes()
    {
      return $this->hasMany(Student_Class::class);
    }
    
    public function comment()
    {
      return $this->hasOne(Comment::class);
    }
}
