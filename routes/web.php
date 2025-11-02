<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\Recommend_testController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\PrescriptionController as ControllersPrescriptionController;
use App\Http\Controllers\View_PatController;
use App\Http\Controllers\View_prescriptionController;
use App\Models\Patient;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $patient=patient::all();
    return view('dashboard',compact('patient'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('doctor/dashboard',[HomeController::class,'index'])->
    middleware(['auth','doctor']);



Route::get('user/add_patient',[UserController::class,'add_patient']);

Route::post('/upload_patient',[UserController::class,'upload']);


Route::get('user/add_test',[UserController::class,'add_test']);
Route::post('/upload_test',[UserController::class,'upload_test']);


Route::get('doctor/prescription',[PrescriptionController::class,'index'])->
    middleware(['auth','doctor']);

Route::post('/upload_prescription',[PrescriptionController::class,'upload_prescription'])->
middleware(['auth','doctor']);

Route::get('doctor/recommended_test',[Recommend_testController::class,'index'])->middleware(['auth','doctor']);
Route::post('/upload_recommend',[Recommend_testController::class,'upload_recommend'])->middleware(['auth','doctor']);

Route::get('doctor/view_medicine',[MedicineController::class,'index'])->middleware(['auth','doctor']);
Route::post('/upload_medicine',[HomeController::class,'upload_medicine'])->middleware(['auth','doctor']);

Route::get('user/view_patient',[UserController::class,'view_patient']);
Route::get('user/view_prescription/{id}',[View_prescriptionController::class,'index']);

Route::get('user/view_pat/{id}',[View_PatController::class,'index']);
