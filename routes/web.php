<?php

use App\Http\Livewire\ChemicalElementController;
use App\Http\Livewire\ApplicationModeController;
use App\Http\Livewire\UnitController;
use App\Http\Livewire\TypePhotograpController;
use App\Http\Livewire\TypeTopographicController;
use App\Http\Livewire\TypeAvocadoController;
use App\Http\Livewire\TypeJobController;

use App\Http\Livewire\ProductCategoryController;
use App\Http\Livewire\SupplyController;
use App\Http\Livewire\ActiveElementController;

use App\Http\Livewire\TypeSoilController;
use App\Http\Livewire\ClimateTypeController;
use App\Http\Livewire\OrchardController;
use App\Http\Livewire\WorkdayController;


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


    Route::get('reset-password',function (){
        return view("auth.reset-password");
    });
    Route::get('profile',function (){
        return view("profile.show");
    });

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::get('chemical_elements', ChemicalElementController::class);
    Route::get('application_modes', ApplicationModeController::class);
    Route::get('units', UnitController::class);
    Route::get('type_avocado', TypeAvocadoController::class);
    Route::get('type_photograps', TypePhotograpController::class);
    Route::get('type_topograps', TypeTopographicController::class);
    Route::get('type_jobs', TypeJobController::class);
    Route::get('product_categories', ProductCategoryController::class);
    Route::get('supplies', SupplyController::class);
    Route::get('active_elements', ActiveElementController::class);

    Route::get('type_soil', TypeSoilController::class);
    Route::get('climate_type', ClimateTypeController::class);
    Route::get('orchard', OrchardController::class);
    Route::get('workday', WorkdayController::class);
});





