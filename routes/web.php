<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//courses
Route::get('/index-course', [CourseController::class, 'index'])->name('index-course');
Route::get('/show-course', [CourseController::class, 'show'])->name('show-course');
Route::get('/create-course', [CourseController::class, 'create'])->name('create-course');
Route::post('/store-course', [CourseController::class, 'store'])->name('store-course');
Route::get('/edit-course', [CourseController::class, 'edit'])->name('edit-course');
Route::put('/update-course', [CourseController::class, 'update'])->name('update-course');
Route::delete('/destroy-course', [CourseController::class, 'destroy'])->name('destroy-course');