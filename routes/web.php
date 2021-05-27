<?php

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
    return view('home');
});

Auth::routes(['register' => false]);

Route::redirect('/home', '/admin');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    # Users routes
    Route::get(
        'users',
        App\Http\Livewire\Admin\Users\UsersIndex::class
    )->name('users');

    Route::get(
        'users/add',
        App\Http\Livewire\Admin\Users\UserAdd::class
    )->name('users.add');

    Route::get(
        'users/{user}',
        App\Http\Livewire\Admin\Users\UserDetail::class
    )->name('users.detail');

    Route::get(
        'users/{user}/edit',
        App\Http\Livewire\Admin\Users\UserEdit::class
    )->name('users.edit');
});
