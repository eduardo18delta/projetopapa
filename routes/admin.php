<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('/admin' , [HomeController::class , 'index']);



//Rotas de CRUD informações de contato menu 
Route::get('admin/contato/listar' , [HomeController::class , 'listar_contato'])->name('listar.contato');
Route::get('admin/contato/editar/{id}' , [HomeController::class , 'editar_contato'])->name('editar.contato');
Route::put('admin/contato/atualizar/{id}' , [HomeController::class , 'update_contato'])->name('update.contato');

//Rotas de CRUD informações do MENU 
Route::get('/admin/menu/listar' , [HomeController::class , 'listar_menu'])->name('listar.menu');
Route::get('/admin/menu/editar/{id}' , [HomeController::class , 'editar_menu']);
Route::put('admin/menu/atualizar/{id}' , [HomeController::class , 'update_menu'])->name('update.menu');


Route::get('/admin/users/listar' , [HomeController::class , 'listar_usuarios'])->name('listar.usuarios');










Route::get('/admin/perfil' , [HomeController::class , 'listar_perfil']);



