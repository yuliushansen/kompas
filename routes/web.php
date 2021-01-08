<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Artikels;
use App\Http\Livewire\Dashboards;

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

Route::group(['middleware' => ['auth:sanctum', 'verified']], function() {
    // Route::get('dashboard', function() {
    //     return view('dashboard');
    // })->name('dashboard');
    Route::get('dashboard', Dashboards::class)->name('dashboard');

    Route::get('artikel', Artikels::class)->name('artikel');
});
