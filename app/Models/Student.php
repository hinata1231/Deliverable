<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;

class Student extends Authenticatable
{
    use HasFactory;
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */ 
     
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function teacher()
    
    {
     return $this->belongsTo(Teacher::class);
    }
    
    public function student_lesson()
    {
      return $this->hasMany(Student_lesson::class);
    }
    
    public function comment()
    {
      return $this->hasOne(Comment::class);
    }
}
