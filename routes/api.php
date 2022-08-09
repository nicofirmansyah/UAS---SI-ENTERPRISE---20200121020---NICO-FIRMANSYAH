<?php
use App\Http\Controllers\API\mahasiswa\MahasiswaController;
use App\Http\Controllers\API\dosen\DsnMahasiswaController;
use App\Http\Controllers\API\dosen\AbsenMhsController;
use App\Http\Controllers\API\dosen\AbsenController;
use App\Http\Controllers\API\dosen\DosenController;
use App\Http\Controllers\API\dosen\JadwalController;
use App\Http\Controllers\API\dosen\SemesterController;
use App\Http\Controllers\API\dosen\MatakuliahController;
use App\Http\Controllers\API\dosen\KontrakMahasiswaController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\WelcomeController;
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

//Route::middleware(['auth', 'dosen'])->group(function () {
    Route::resource('/actionabsen', AbsenController::class);
    Route::resource('/absenMhs', AbsenMhsController::class);
    Route::resource('/semester', SemesterController::class);
    Route::resource('/jadwal', JadwalController::class);
    Route::resource('/dosen', DosenController::class);
    Route::resource('/kontrak_mahasiswa', KontrakMahasiswaController::class);
    Route::resource('/mahasiswa', DsnMahasiswaController::class);
    Route::resource('/matakuliah', MatakuliahController::class);
    Route::get('/actionabsen/{user}/{id}', [AbsenController::class, 'create']);
//});
