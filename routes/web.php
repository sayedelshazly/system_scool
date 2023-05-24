<?php

use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\DepartmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/',function(){
    return view('welcom');
 });
Route::resource('/department',DepartmentController::class);

Route::resource('/subjects',SubjectController::class);

// Auth::routes();

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::POST('/subject/show', [SubjectController::class,'SubjectController']);
