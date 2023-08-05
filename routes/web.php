<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = [
        "title" => "Dasboard",
      
    ];
    return view('contents.dashboard', $data);
});


Route::get('/tabless', function () {

    return view('contents.user', [
        "title" => "user",
        "users" => User::all(),
        "posts" => Post::all(),
    ]);
});
