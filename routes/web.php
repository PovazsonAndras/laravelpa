<?php
use App\Models\County;
use App\Http\Controllers\CountyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/counties', [CountyController::class, 'index'])->name('counties.index');
Route::get('/counties/create', [CountyController::class, 'create'])->name('counties.create');
Route::post('/counties', [CountyController::class, 'store'])->name('counties.store');
Route::get('/counties/{county}', [CountyController::class, 'show'])->name('counties.show');