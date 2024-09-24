<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

Route::get('/course', function () {
    return view('course');
});

// Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/courses/{slug}', [CourseController::class, 'show'])->name('course.show');

Route::get('/', [HomeController::class, 'index']);

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/courses/{course}', [CourseController::class, 'show'])->name('course.detail');
// Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// Route::get('/webinars', [WebinarController::class, 'index'])->name('webinar.index');
// Route::post('/register', [RegistrationController::class, 'store'])->name('register');

Route::post('/submit-message', [MessageController::class, 'store'])->name('submit.message');
