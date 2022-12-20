<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BungaController;


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

Route::get('/', [BungaController::class, 'index'])->name('/');
Route::get('/create', [BungaController::class, 'create'])->name('create');
Route::get('/edit', [BungaController::class, 'edit'])->name('edit');
Route::delete('/destroy/{id}', [BungaController::class, 'destroy'])->name('destroy');