<?php

use App\Http\Controllers\NoteController;
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

Route::get('/', [NoteController::class, 'index'])->name('notes.index');

Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');
Route::post('/notes/create', [NoteController::class, 'store']);

Route::get('/notes/{note}', [NoteController::class, 'show'])->name('notes.show');

Route::get('/notes/{note}/edit', [NoteController::class, 'edit'])->name('notes.edit');
Route::post('/notes/{note}/edit', [NoteController::class, 'update']);

Route::delete('/notes/{note}', [NoteController::class, 'delete'])->name('notes.delete');




