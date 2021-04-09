<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('/admin' , [HomeController::class , 'index']);



//Rotas de CRUD informações de contato menu 
Route::get('admin/contato/listar' , [HomeController::class , 'listar_contato'])->name('listar.contato');
Route::get('admin/contato/editar/{id}' , [HomeController::class , 'editar_contato']);
Route::put('admin/contato/atualizar/{id}' , [HomeController::class , 'update_contato'])->name('update.contato');

Route::get('/admin/menu/listar' , [HomeController::class , 'listar_menu']);


Route::get('/admin/perfil' , [HomeController::class , 'listar_perfil']);



