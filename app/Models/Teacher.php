<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Notifications\TeacherResetPassword as ResetPasswordNotification;
use Laravel\Sanctum\HasApiTokens;

class Teacher extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'title',
        'body',
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
    
    public function sendPasswordResetNotification($token)
      {
        $this->notify(new ResetPasswordNotification($token));
      }
      
      
      
    public function students()
      {
          return $this->hasMany(Student::class);
      }
      
    public function lessons()
      {
          return $this->hasMany(Lesson::class);
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






