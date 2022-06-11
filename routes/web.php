<?php

use App\Http\Controllers\KeluargaController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/', function () {
//     return Inertia::render('Welcome', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// });

// Route::get('/dashboard', function () {
//     return Inertia::render('Dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// require __DIR__.'/auth.php';

Route::group(['prefix' => ''], function () {
    Route::get('/', [KeluargaController::class, 'index']);
    Route::resource('/keluarga', KeluargaController::class);
    Route::get('no3', [KeluargaController::class, 'get_anak_budi'])->name('no3');
    Route::get('no4', [KeluargaController::class, 'get_cucu_budi'])->name('no4');;
    Route::get('no5', [KeluargaController::class, 'get_cucu_perempuan_budi'])->name('no5');
    Route::get('no6', [KeluargaController::class, 'get_bibi_from_farah'])->name('no6');
    Route::get('no7', [KeluargaController::class, 'get_seppupu_from_hani'])->name('no7');
});
