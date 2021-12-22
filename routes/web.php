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

Route::get('/',[NoteController::class,"index"])->name("notes.index");

Route::prefix('/notes')->group(function () {
    Route::get('/create',[NoteController::class,"showFormCreate"])->name("notes.showFormCreate");
    Route::post('/create',[NoteController::class,"create"])->name("notes.create")->middleware("checkTitle");
    Route::get('/{id}/detail',[NoteController::class,"showDetail"])->name("notes.showDetail");
    Route::get('/{id}/update',[NoteController::class,"showUpdate"])->name("notes.showUpdate");
    Route::post('/{id}/update',[NoteController::class,"update"])->name("notes.update");
    Route::get('/{id}/delete',[NoteController::class,"destroy"])->name("notes.delete");
    Route::any('/search',[NoteController::class,"search"])->name("notes.search");

});


