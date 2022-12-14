<?php

use App\Http\Controllers\Conversations\ConversationsController;
use App\Http\Controllers\HomeController;
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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/conversations', [ConversationsController::class, 'index'])->name('conversations.index');
Route::get('/conversations/{conversion}', [ConversationsController::class, 'show'])->name('conversations.show');
