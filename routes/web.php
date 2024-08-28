<?php
use App\Exports\AbsensiExport;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Absensi;
use App\Models\User;
Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::get('/absensi/user/{userId}', [AbsensiController::class, 'index'])->name('absensi.index');
Route::get('/absensi/{id}', [AbsensiController::class, 'show'])->name('absensi.detail');
Route::get('/absensi/create/{userId}', [AbsensiController::class, 'create'])->name('absensi.create');
Route::post('/absensi/store', [AbsensiController::class, 'store'])->name('absensi.store');


Route::get('/export-users', function () {
    $absensi = Absensi::with('user')->get(); // Ensure 'user' relationship is loaded
    return Excel::download(new AbsensiExport($absensi), 'absensi.xlsx');
});

Route::delete('/hapus/{id}', [UserController::class, 'hapus'])->name('users.hapus');


