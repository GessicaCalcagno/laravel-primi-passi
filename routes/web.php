<?php

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
$username = "Filadelfo";
$greeting = "hello!";
    $data = [
        'username' => $username,
        'greeting' => $greeting,
    ];
    return view('home', $data);
})->name("home");

Route::get('/about us', function(){
    return view("about"); //deve essere uguale a quello che scrivo nel name tra parentesi o non mi trova la pagina
})->name("about");
