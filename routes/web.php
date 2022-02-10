<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->middleware(['otpverified'])->name('dashboard');



Route::get('/record-list', [RecordController::class, 'index'])
->middleware(['auth'])->middleware(['otpverified']) 
                ->name('records.list');

Route::get('/record-add', [RecordController::class, 'create'])
->middleware(['auth'])->middleware(['otpverified']) 
                ->name('records.create');
 
Route::post('/record-add', [RecordController::class, 'store'])
->middleware(['auth'])->middleware(['otpverified'])
                ->name('records.create');

                Route::get('/record-update/{id}', [RecordController::class, 'edit'])
->middleware(['auth']) ->middleware(['otpverified'])
                ->name('records.update');
 
Route::post('/record-update/{id}', [RecordController::class, 'update'])
->middleware(['auth'])->middleware(['otpverified'])
                ->name('records.update');

                 
Route::post('/record-destroy', [RecordController::class, 'destroy'])
->middleware(['auth'])->middleware(['otpverified'])
                ->name('records.destroy');

require __DIR__.'/auth.php';
