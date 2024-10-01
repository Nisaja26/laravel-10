<?php

use Illuminate\Support\Facades\Route;

// membuat route
// jika menggunakkan route jenis resource, route untuk proses CRUD akan di regenerate secara otomatis oleh laravel
// seperti index, create, store, show, edit, update, destory


//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);