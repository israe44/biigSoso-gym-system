<?php
use Illuminate\Support\Facades\Route; //use route feature od laravel
use App\Http\Controllers\MemberController;

Route::get('/', [MemberController::class, 'index']); //when user will visit the home page
Route::get('/members/create', [MemberController::class, 'create']);
Route::post('/members', [MemberController::class, 'store']); //we're sending data this time
Route::get('members/{id}/edit', [MemberController::class, 'edit']); //{i} is a dynamic parameter meaning the URL will change depending on which member u wanna edit
Route::put('/members/{id}', [MemberController::class, 'update']); //put is used to save the updated data to the database
Route::delete('/members/{id}', [MemberController::class, 'destroy']);