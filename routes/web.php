<?php

use App\Http\Controllers\ProductController;
use App\Http\Livewire\Click;
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
    return view('welcome');
});
Route::get('datepikec', function () {
    return view('datepikec');
});

Route::get('addsubject', function () {
    return view('addsubject');
});

Route::get('check-click-event', Click::class);

Route::get('/my-form', [ProductController::class, 'ipv6form']);
Route::post('/submit-form', [ProductController::class, 'validateForm'])->name(
    'validate.ip'
);
Route::post('/upload-doc-file', [ProductController::class, 'uploadToServer']);
