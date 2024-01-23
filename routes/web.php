<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/destino', [DestinoController::class, 'index']);
Route::get('/destino/{id}', [DestinoController::class, 'show']);

Route::get('/destinos', [DestinoController::class, 'index'])->name('destino.index');
Route::get('/destinos/create', [DestinoController::class, 'create'])->name('destino.create');
Route::post('/destinos', [DestinoController::class, 'store'])->name('destino.store');
Route::get('/destinos/{destino}', [DestinoController::class, 'show'])->name('destino.show');
Route::get('/destinos/{destino}/edit', [DestinoController::class, 'edit'])->name('destino.edit');
Route::put('/destinos/{destino}', [DestinoController::class, 'update'])->name('destino.update');
Route::delete('/destinos/{destino}', [DestinoController::class, 'destroy'])->name('destino.destroy');

require __DIR__.'/auth.php';
