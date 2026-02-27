<?php
use Illuminate\Support\Facades\Route; //use route feature od laravel
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PlanController;

// all routes should be outside the middleware (anyone can access em)
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// only logged in users can access these ones (protected)
Route::middleware(['auth'])->group(function (){ //checking if the user is autentificated | for group(function()) it's basically groups multiple routes together for our case all routes inside this group will have the same middleware

Route::get('/', [MemberController::class, 'index']); //when user will visit the home page
Route::get('/members/create', [MemberController::class, 'create']); 
Route::post('/members', [MemberController::class, 'store']); //we're sending data this time | store 
Route::get('members/{id}/edit', [MemberController::class, 'edit']); //{id} is a dynamic parameter meaning the URL will change depending on which member u wanna edit
Route::put('/members/{id}', [MemberController::class, 'update']); //put is used to save the updated data to the database
Route::delete('/members/{id}', [MemberController::class, 'destroy']);


Route::get('/plans', [PlanController::class, 'index']);
Route::get('/plans/create', [PlanController::class, 'create']);
Route::post('/plans', [PlanController::class, 'store']);
Route::get('/plans/{id}/edit', [PlanController::class, 'edit']);
Route::put('/plans/{id}', [PlanController::class, 'update']);
Route::delete('/plans/{id}', [PlanController::class, 'destroy']);

});


