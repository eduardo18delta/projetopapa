<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('/admin' , [HomeController::class , 'index']);


Route::get('/admin/menu/listar' , [HomeController::class , 'listar_menu']);
Route::get('admin/contato/listar' , [HomeController::class , 'listar_contato']);
Route::get('admin/contato/editar' , [HomeController::class , 'editar_contato']);
Route::get('/admin/perfil' , [HomeController::class , 'listar_perfil']);



