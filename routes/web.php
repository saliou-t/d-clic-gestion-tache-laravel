<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TacheController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Route::get('/taches', function () {
//     return view('taches.taches');
// });


Route::get('/tache/{id_tache}/details', [TacheController::class, 'show'])->name('details');


Route::get('/taches', [TacheController::class, 'getListeTaches']);


Route::get('/tache/termine/{id_tache}', [TacheController::class, 'termine']);
