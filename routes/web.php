<?php

use App\Http\Controllers\GroupController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/group/create', [GroupController::class, 'create_form']);

Route::post('/group/create', [GroupController::class, 'create']);

Route::get('/group/join', [GroupController::class, 'join_form']);

Route::post('/group/join', [GroupController::class, 'join']);

Route::get('/group/{id}', [GroupController::class, 'show_group']);

Route::get('/group/edit/{id}', [GroupController::class, 'edit']);

Route::post('/group/update/{id}', [GroupController::class, 'update']);

Route::delete('/group/delete/{id}', [GroupController::class, 'delete']);

Route::get('/group/members_list/{id}', [GroupController::class, 'members_list']);

Route::get('/remove_user/{id}/{user_id}', [GroupController::class, 'remove_user']);

Route::post('/send_message/{id}', [MessageController::class, 'send_message']);

Route::get('/show_messages/{id}', [MessageController::class, 'show_messages']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

