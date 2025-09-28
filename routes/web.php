<?php


use App\Http\Controllers\PilotController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/home', function () {
    return view('home');
});


Route::get('/pilots', fn () => redirect()->route('pilots.index'));
Route::resource('pilots', PilotController::class);


Route::get('/pilotsold', function () {
    return view('pilots');
});
