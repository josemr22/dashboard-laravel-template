<?php

use App\Http\Controllers\ArbitratorController;
use App\Models\Arbitrator;
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

Route::get('/', function () {
    return redirect()->route('arbitrators');
});
Route::get('/home', function () {
    return redirect()->route('arbitrators');
});

Route::view('/arbitros', 'dashboard.arbitros')->name('arbitrators')->middleware(['auth']);
Route::view('/sorteo', 'dashboard.sorteo')->name('sorteo')->middleware(['auth']);

// Route::post('logout', function () {
//     Auth::logout();
//     return redirect('/login');
// })->name('logout');
