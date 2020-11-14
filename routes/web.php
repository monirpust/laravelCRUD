<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// landing page without controller
Route::get('/',function(){
  return view('land');
});


//show all users
Route::get('/users', [UsersController::class,'showUsers'])->name('view.users');

//creating new users and add to db
Route::get('/addUser', [UsersController::class, 'addUser'])->name('add.user');

//adding to db
Route::post('/addUser', [UsersController::class, 'addUserSubmit'])->name('submit.user');

//viewing sigle user
Route::get('/users/{id}',[UsersController::class, 'getUserById'])->name('user.id');

//remove user
Route::get('/delete-user/{id}',[UsersController::class, 'deleteUser'])->name('delete.user');

//edit user
Route::get('/edit-user/{id}', [UsersController::class, 'editUser'])->name('edit.user');

//update user
Route::post('/update-user/{id}', [UsersController::class, 'updateUser'])->name('update.user');
