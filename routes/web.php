<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\CategoriesController; // ✅ Importación correcta
use App\Models\Member;

// Redirección de la raíz al catálogo de libros
Route::redirect('/', '/books');

// Rutas RESTful para libros y autores
Route::resource('books', BookController::class);
Route::resource('authors', AuthorController::class);
Route::resource('categories', CategoriesController::class);

// Ruta temporal para miembros
Route::get('/miembros', fn() => view('miembros.index', [
    'members' => Member::with('user')->take(10)->get()
]));
