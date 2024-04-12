<?php

use App\Http\Controllers\CrudUserController;
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
Route::get('dashboard', [CrudUserController::class, 'dashboard']);
Route::get('create', [CrudUserController::class, 'indexCreate'])->name('user.createUserIndex');
Route::post('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::get('login', [CrudUserController::class, 'indexLogin'])->name('user.loginIndex');
Route::post('login', [CrudUserController::class, 'customLogin'])->name('user.login');


Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('welcome');
});