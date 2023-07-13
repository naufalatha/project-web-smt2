<?php

use App\Http\Controllers\Admin\BorrowRoomController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\RoomTypeController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::get('/peminjaman', [BorrowRoomController::class, 'index'])->name('peminjaman');
    Route::post('/approval/{id}/{approval}', [BorrowRoomController::class, 'approvalRoom'])->name('approval.ruangan');

    Route::get('/ruangan', [RoomController::class, 'index'])->name('ruangan');
    Route::get('ruangan/create', [RoomController::class, 'create'])->name('ruangan.create');
    Route::post('ruangan', [RoomController::class, 'store'])->name('ruangan.store');
    Route::get('ruangan/{id}/edit', [RoomController::class, 'edit'])->name('ruangan.edit');
    Route::post('ruangan/{id}', [RoomController::class, 'update'])->name('ruangan.update');
    Route::post('ruangan/delete/{id}', [RoomController::class, 'destroy'])->name('ruangan.delete');

    Route::get('/tipe-ruangan', [RoomTypeController::class, 'index'])->name('tipe-ruangan');
    Route::get('tipe-ruangan/create', [RoomTypeController::class, 'create'])->name('tipe-ruangan.create');
    Route::post('tipe-ruangan', [RoomTypeController::class, 'store'])->name('tipe-ruangan.store');
    Route::get('tipe-ruangan/{id}/edit', [RoomTypeController::class, 'edit'])->name('tipe-ruangan.edit');
    Route::post('tipe-ruangan/{id}', [RoomTypeController::class, 'update'])->name('tipe-ruangan.update');
    Route::post('tipe-ruangan/delete/{id}', [RoomTypeController::class, 'destroy'])->name('tipe-ruangan.delete');
});
