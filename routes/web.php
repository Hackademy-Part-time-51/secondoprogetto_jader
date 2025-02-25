<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'homepage']);
Route::get('/articles', [UserController::class, 'articles']);
Route::get('/articles/{parametro}', [UserController::class, 'article']);
Route::get('/contact', [UserController::class, 'contact']);
