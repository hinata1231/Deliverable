<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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
   
 protected $fillable = [
    'student_id',
    'teacher_id',
    'zoom_url',
    'illegular',
    'datetime',
  ];
  
  public function getLatest(){
    
    $today = Carbon::today();
    return $this->whereDate('datetime' ,'>=', $today)->get();   
      
  }

}