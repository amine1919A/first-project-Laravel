<?php

//c'est le fichier de routage de l'application

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

route::get ("/hello", function () {
    return "Hello World";

});// Redirige / vers la liste des tâches
Route::get('/', fn() => redirect()->route('tasks.index'));
// Génère automatiquement les 7 routes CRUD
Route::resource('tasks', TaskController::class);

// tebe3 tp
Route::get('/home', function () { return view('home'); });
Route::get('/profil', function () { return view('profil', [ 'nom' => 'Alice', 'age' => 25, 'ville' => 'Paris' ]); });
Route::get('/produits', function () { $produits = [ ['nom' => 'Ordinateur', 'prix' => 899], ['nom' => 'Souris', 'prix' => 25], ['nom' => 'Clavier', 'prix' => 65], ['nom' => 'Écran', 'prix' => 299], ]; return view('produits', ['produits' => $produits]); });
Route::get('/contact', function () { return view('contact'); });























route :: get ("/about", function (){

return "<h1> Hello World </h1>
          <p> This is my first Laravel application </p>
          <ul>
          <li>PHP</li>
          <li>Laravel</li>
          <li>MySQL</li>
          </ul>
          ";
}) ;


Route::get ("/user/{nom}", function ($nom){
    return "Hello $nom";
});

//get avec  condition check
Route::get ("/users/{id}", function ($id){
return "Hello $id";
}) ->where ("id" , "[0-9]+") ;


// addig fucntion sum two numbers
Route::get("/sum/{a}/{b}", function ($a, $b) {
    $sum = $a + $b;
    return "La somme de $a et $b est : $sum";
});
Route::get("/age/{age}", function ($age) {
    if ($age >= 18) {
        return "Vous êtes majeur.";
    } else {
        return "Vous êtes mineur.";
    }
});


Route::get('/equipe/{membre?}', function ($membre = null) {

    $equipe = [
        "ali",
        "sara",
        "mohamed",
        "yasmine"
    ];

    if ($membre === null) {
        return "Toute l'équipe";
    }

    if (in_array($membre, $equipe)) {
        return "Membre de l'équipe : " . $membre;
    }

    return "Ce membre n'existe pas";
});
