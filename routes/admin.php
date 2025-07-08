<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Admin\ContactController;
// use App\Http\Controllers\Admin\UserController;



Route::group(
    ['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'],
    function () {
        // Route::get('/', function () {
        //     return view('admin.index');
        // })->name('dashboard');

        Route::resource('users', UserController::class);
        // Route::get('/', [UserController::class, 'index'])->name('users.index');
        //users. index
        //users.create
        //users.store
        //users.show
        //users.edit
        //users.update
        //users.destroy
        Route::resource('contacts', ContactController::class);
    }
);
