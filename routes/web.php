<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MechanicController;
use \App\Http\Controllers\Auth\AuthenticatedSessionController;

use App\Models\Mechanic;

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
    $mechanics = Mechanic::all();

    return view('welcome', compact('mechanics'));
});

Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    /// service routes
    Route::get('/add-service', [ServiceController::class, 'create']);
    Route::post('/add-service/store', [ServiceController::class, 'store']);
    Route::get('/service/{service}', [ServiceController::class, 'show']);
    Route::get('/edit-service/{service}', [ServiceController::class, 'edit']);
    Route::get('/edit-service/{service}/delete', [ServiceController::class, 'destroy']);

    // mechanic routes
    Route::get('/add-mechanic', [MechanicController::class, 'create']);
    Route::post('/add-mechanic/store', [MechanicController::class, 'store']);
    Route::get('/mechanic/{mechanic}', [MechanicController::class, 'show']);
    Route::get('/edit-mechanic/{mechanic}', [MechanicController::class, 'edit']);
    Route::get('/edit-mechanic/{mechanic}/delete', [MechanicController::class, 'destroy']);



    // other routes
    Route::get('/logout', '\App\Http\Controllers\Auth\AuthenticatedSessionController@destroy');

});




Route::get('/migrate',function(){
   Artisan::call('migrate:refresh');
});




require __DIR__.'/auth.php';
