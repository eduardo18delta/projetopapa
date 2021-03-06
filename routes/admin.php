<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

Route::get('/admin' , [HomeController::class , 'index']);

// Rotas de CRUD informações de contato menu 
Route::get('/admin/contato/listar' , [HomeController::class , 'listar_contato'])->name('listar.contato');
Route::get('/admin/contato/editar/{id}' , [HomeController::class , 'editar_contato'])->name('editar.contato');
Route::put('/admin/contato/atualizar/{id}' , [HomeController::class , 'update_contato'])->name('update.contato');

// Rotas de CRUD informações do MENU 
Route::get('/admin/menu/listar' , [HomeController::class , 'listar_menu'])->name('listar.menu');
Route::get('/admin/menu/editar/{id}' , [HomeController::class , 'editar_menu'])->name('editar.menu');
Route::put('/admin/menu/atualizar/{id}' , [HomeController::class , 'update_menu'])->name('update.menu');

// Rotas de CRUD dos USERS 
Route::get('/admin/users/listar' , [HomeController::class , 'listar_usuarios'])->name('listar.usuarios');
Route::get('/admin/user/editar/{id}' , [HomeController::class , 'editar_usuarios'])->name('editar.usuarios');
Route::put('/admin/user/atualizar/{id}' , [HomeController::class , 'update_usuarios'])->name('update.usuarios');

// Rotas de CRUD dos USERS 
Route::get('/admin/perfil' , [HomeController::class , 'listar_perfil']);


// Rotas de CRUD dos SERVIÇOS
Route::get('/admin/servicos/listar' , [HomeController::class , 'listar_servicos'])->name('listar.servicos');
Route::get('/admin/servicos/editar/{id}' , [HomeController::class , 'editar_servicos'])->name('editar.servicos');
Route::put('/admin/servicos/atualizar/{id}' , [HomeController::class , 'update_servicos'])->name('update.servicos');








