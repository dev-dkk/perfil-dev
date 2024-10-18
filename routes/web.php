<?php
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PerfilController::class, 'inicio']);
Route::get('/biografia',[PerfilController::class, 'bio']);
Route::get('/formacao',[PerfilController::class, 'formacao']);
Route::get('/certificados',[PerfilController::class, 'certificados']);
