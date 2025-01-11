
<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

use App\Http\Controllers\Informatika2301100037Controller;

Route::get('/mobils1', [Informatika2301100037Controller::class, 'create'])->name('mobils.create');

// Route untuk menyimpan data
Route::post('/mobils', [Informatika2301100037Controller::class, 'store'])->name('mobils.store');

Route::get('/form', [Informatika2301100037Controller::class, 'showForm']);
Route::post('/form', [Informatika2301100037Controller::class, 'submitForm'])->name('form.submit');

Route::get('/kalkulator', [Informatika2301100037Controller::class, 'index1']);
Route::post('/kalkulator/action', [Informatika2301100037Controller::class, 'calculate']);

use Illuminate\Http\Request;

use App\Http\Controllers\BiodataController;

Route::get('/biodataUTS', [BiodataController::class, 'biodataUTS']);
Route::post('/biodataUTS/action', [BiodataController::class, 'biodataUTSAction']);
Route::get('/biodataUTS/edit/{id}', [BiodataController::class, 'edit']); // Route untuk edit
Route::post('/biodataUTS/update/{id}', [BiodataController::class, 'update']); // Route untuk update
Route::delete('/biodataUTS/delete/{id}', [BiodataController::class, 'delete']); // Route untuk delete


