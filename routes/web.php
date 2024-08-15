<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EventController::class, 'index']);

// Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/courses/{course}', [CourseController::class, 'show'])->name('course.detail');
// Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
// Route::get('/webinars', [WebinarController::class, 'index'])->name('webinar.index');
// Route::post('/register', [RegistrationController::class, 'store'])->name('register');
