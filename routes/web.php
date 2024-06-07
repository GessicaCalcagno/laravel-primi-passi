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
//variabile statica con funzione di call back la stringa è il nome della pagina,in questo caso la prima pagina, la seconda è una funzione di call back
Route::get('/', function () {
$username = "Filadelfo";
$greeting = "hello!";
/*
-ricorda che dei usare un solo metodo o compact se devo passare poche variabili, $data invece è più leggibile se hai più variabili.
-nel data che è la variabile = array associativo usiamo le key ''
$data è un modo di impacchettare e passare i dati
- un secondo metodo con function compact:
return view('home', compact('username'));
*/
    $data = [
        'username' => $username,
        'greeting' => $greeting,
    ];
    //view è una funzione che prende il nome della stringa che gli passiamo
    return view('home', $data);
})->name("home");

//questo è ol percorso nel browser
Route::get('/about us', function(){
    //è il nome del file php
    return view("about"); //deve essere uguale a quello che scrivo nel name tra parentesi o non mi trova la pagina
    //questo è l'alias che ci permette di andare nella pagina about
})->name("about");
