<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\MenuContactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/' , [MenuController::class, 'index']);

Route::get('/teste' ,  [MenuContactController::class, 'index'] , );











// Route::get('/', function () {
//     return view('site.landingpage');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
