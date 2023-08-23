<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
  public function teacher()
  {
    return $this->belongsTo(teacher::class); 
  }
  
  public function student()
  {
    return $this->belongsTo(Student::class);
  }
}
