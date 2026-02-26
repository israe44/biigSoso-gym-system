<?php
use Illuminate\Support\Facades\Route; //use route feature od laravel
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PlanController;


Route::get('/', [MemberController::class, 'index']); //when user will visit the home page
Route::get('/members/create', [MemberController::class, 'create']); 
Route::post('/members', [MemberController::class, 'store']); //we're sending data this time | store 
Route::get('members/{id}/edit', [MemberController::class, 'edit']); //{id} is a dynamic parameter meaning the URL will change depending on which member u wanna edit
Route::put('/members/{id}', [MemberController::class, 'update']); //put is used to save the updated data to the database
Route::delete('/members/{id}', [MemberController::class, 'destroy']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/plans', [PlanController::class, 'index']);
Route::get('/plans/create', [PlanController::class, 'create']);
Route::post('/plans', [PlanController::class, 'store']);
Route::get('/plans/{id}/edit', [PlanController::class, 'edit']);
Route::put('/plans/{id}', [PlanController::class, 'update']);
Route::delete('/plans/{id}', [PlanController::class, 'destroy']);

