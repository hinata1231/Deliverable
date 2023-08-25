<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
  
  public function students()

  {
      return $this->hasMany(Student::class);
  }
  
  public function classes()
  {
      return $this->hasMany(classe::class);
  }   
  
  public function comment()
  {
      return $this->hasOne(Comment::class);
  }
  
 public function getPaginateByLimit(int $limit_count = 10)
  {
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
} 
     








