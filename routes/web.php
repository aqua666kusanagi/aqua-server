<?php

use App\Http\Livewire\ChemicalElementController;
use App\Http\Livewire\ApplicationModeController;
use App\Http\Livewire\ProductCategoryController;
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

Route::middleware(['auth:sanctum', 'verified'])->group(function (){

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('test_template',function (){
        return view("layouts.template");
    });

    Route::get('chemical_elements', ChemicalElementController::class);
    Route::get('application_modes', ApplicationModeController::class);
    Route::get('product_categories', ProductCategoryController::class);
});





