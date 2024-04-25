<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;

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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/', [UserController::class, 'user'])->middleware('verified');
// Route::get('/tim' . '{' . auth()->user()->id . '}', [UserController::class, 'tim'])->middleware('verified');
Route::get('/tim', [UserController::class, 'tim'])->middleware('verified');
Route::get('/profiles', [UserController::class, 'profile'])->middleware('verified');
Route::get('/detail/{id}', [BarangController::class, 'invest'])->middleware('verified');

Route::get('/admin', [UserController::class, 'admin'])->middleware('verified');
// Route::get('/detail', [UserController::class, 'show']);

Route::get('/withdraw', function () {
    return view('withdraw', ['Title' => 'Withdraw']);
})->middleware('verified');
Route::get('/payment', function () {
    return view('payment', ['Title' => 'payment']);
})->middleware('verified');

Route::get('/dashboard', function () {
    return view('dashboard');
})
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/tambahbarang', function () {
    return view('tambahbarang', ['Title' => 'Tambah Barang']);
});
Route::get('/acc', function () {
    return view('acctransaction', ['Title' => 'Acc']);
});
Route::get('/accinvest', function () {
    return view('investpeople', ['Title' => 'Acc Invest']);
});
Route::get('/accwithdraw', function () {
    return view('accwithdraw', ['Title' => 'Acc withdraw']);
});
