<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalysisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('prakruti');
});
Route::get('/',[AnalysisController::class,'index']);
Route::get('/prakruti',[AnalysisController::class,'showresult']);
Route::post('prakruti/create',[AnalysisController::class,'create'])->name('create');

Route::post('prakruti/analysis',[AnalysisController::class,'create_analysis'])->name('create_analysis');

Route::get('/viewpdf',[AnalysisController::class,'view'])->name('viewpdf');