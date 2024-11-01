<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\OpenAIController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('teachers',TeacherController::class);

Route::resource('classes',ClassController::class)->except('show');

Route::resource('subjects',SubjectController::class)->except('show');

Route::resource('tasks',TaskController::class)->except('show');

Route::get('/ai/haiku', [OpenAIController::class, 'getCompletion']);

Route::controller(TeacherController::class)->group(function (){
    Route::get('/teachers/test','test');

    Route::post('/teachers/login','login');

    Route::get('/teachers/signup','signup');

    Route::get('/teachers/subject','subject');

    Route::get('/teachers/activities','activities');

    Route::get('/teachers/answer','answer');

    Route::get('/teachers/info_email','info_email');

    Route::get('/teachers/info_code','info_code');

    Route::get('/teachers/change_password','change_password');
});
