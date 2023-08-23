<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Class extends Model
{
    use HasFactory;
    
  public function student()
  {
      return $this->belongsTo(Student::class);
  }
  public function classe()
  {
      return $this->belongsTo(Classe::class);
  }
}
