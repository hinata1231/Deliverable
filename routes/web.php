<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController as ProfileOfTeacherController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//student専用
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/student/top', [StudentController::class, 'top'])->name('top');
    Route::get('/student/start', [StudentController::class, 'start'])->name('start');
    Route::get('/student/teacher', [StudentController::class, 'teacher'])->name('teacher');
    Route::get('/student/comment', [StudentController::class, 'comment'])->name('comment');
});

require __DIR__.'/auth.php';

//  teacher専用
//  URLの先頭にteachrをつける
Route::prefix('teacher')->name('teacher.')->group(function(){ 
    Route::get('/dashboard', function () {
        return view('teacher.dashboard');
    })->middleware(['auth:teacher', 'verified'])->name('dashboard');

    Route::middleware('auth:teacher')->group(function () {
        Route::get('/profile', [ProfileOfTeacherController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileOfTeacherController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileOfTeacherController::class, 'destroy'])->name('profile.destroy');
        
        Route::get('/member', [TeacherController::class, 'member'])->name('member');
    
        Route::get('/comment', [TeacherController::class, 'comment'])->name('comment');
        Route::post('/comment/store', [TeacherController::class, 'store'])->name('store');
        
        Route::get('/teachers/create', [TeacherController::class, 'create'])->name('teacher.create');
        Route::post('/teachers', [TeacherController::class, 'store'])->name('store');
        
        Route::get('/lesson', [LessonController::class, 'index'])->name('lesson.index');
        Route::get('/lessons/create', [LessonController::class, 'create'])->name('lesson.create');
        Route::post('/lessons', [LessonController::class, 'store'])->name('store');
        Route::get('/lessons/{lesson}', [LessonController::class ,'show'])->name('show');
    });

    require __DIR__.'/teacher.php';
});
 
 