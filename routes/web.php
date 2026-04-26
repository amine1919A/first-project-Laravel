<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
route::get ("/hello", function () {
    return "Hello World";

});// Redirige / vers la liste des tâches

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
});
// Route publique : redirection vers la liste ou login
Route::get('/', fn() => redirect()->route('tasks.index'));

// Toutes les routes de tasks sont protegees
Route::middleware(['auth'])->group(function () {
    Route::resource('tasks', TaskController::class);
   });
   

Route::get('/home', function () { return view('home'); });
Route::get('/profil', function () { return view('profil', [ 'nom' => 'Alice', 'age' => 25, 'ville' => 'Paris' ]); });
Route::get('/produits', function () { $produits = [ ['nom' => 'Ordinateur', 'prix' => 899], ['nom' => 'Souris', 'prix' => 25], ['nom' => 'Clavier', 'prix' => 65], ['nom' => 'Écran', 'prix' => 299], ]; return view('produits', ['produits' => $produits]); });
Route::get('/contact', function () { return view('contact'); });
require __DIR__.'/auth.php';
