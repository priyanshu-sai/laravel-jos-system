<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobOrderController;
use App\Http\Controllers\ConductorController;
use App\Http\Controllers\ContractorController;
use App\Http\Controllers\TypeOfWorkController;
use App\Http\Controllers\JobOrderStatementController;



Route::get('/', function () {
    return view('layouts.app', ['view' => 'layouts.dashboard']);
});


Route::get('/list-type-of-works',[TypeOfWorkController::class,'listTypeOfWork'])->name('list-type-of-works');
Route::get('/add-page-type-of-works',[TypeOfWorkController::class,'addTypeOfWork'])->name('add-page-type-of-works');
Route::post('/insert-type-of-works',[TypeOfWorkController::class,'insert'])->name('insert-type-of-works');
Route::get('/edit-page-type-of-works/{id}',[TypeOfWorkController::class,'editTypeOfWork'])->name('edit-page-type-of-works');
Route::post('/update-type-of-works/{id}',[TypeOfWorkController::class,'update'])->name('update-type-of-works');
Route::get('/view-type-of-works/{id}', [TypeOfWorkController::class, 'view'])->name('view-type-of-works');
Route::get('/delete-type-of-works/{id}',[TypeOfWorkController::class,'delete'])->name('delete-type-of-works');


Route::get('/list-contractors', [ContractorController::class, 'listContractors'])->name('list-contractors');
Route::get('/add-page-contractors', [ContractorController::class, 'addContractor'])->name('add-page-contractors');
Route::post('/insert-contractors', [ContractorController::class, 'insert'])->name('insert-contractors');
Route::get('/edit-page-contractors/{id}', [ContractorController::class, 'editContractor'])->name('edit-page-contractors');
Route::post('/update-contractors/{id}', [ContractorController::class, 'update'])->name('update-contractors');
Route::get('/view-contractors/{id}', [ContractorController::class, 'view'])->name('view-contractors');
Route::get('/delete-contractors/{id}', [ContractorController::class, 'delete'])->name('delete-contractors');


Route::get('/list-conductors', [ConductorController::class, 'listConductor'])->name('list-conductors');
Route::get('/add-page-conductors', [ConductorController::class, 'addConductor'])->name('add-page-conductors');
Route::post('/insert-conductors', [ConductorController::class, 'insert'])->name('insert-conductors');
Route::get('/edit-page-conductors/{id}', [ConductorController::class, 'editConductor'])->name('edit-page-conductors');
Route::post('/update-conductors/{id}', [ConductorController::class, 'update'])->name('update-conductors');
Route::get('/view-conductors/{id}', [ConductorController::class, 'view'])->name('view-conductors');
Route::get('/delete-conductors/{id}', [ConductorController::class, 'delete'])->name('delete-conductors');


Route::get('/list-job-orders', [JobOrderController::class, 'listJobOrders'])->name('list-job-orders');
Route::get('/add-page-job-order', [JobOrderController::class, 'addJobOrder'])->name('add-page-job-order');
Route::post('/insert-job-order', [JobOrderController::class, 'insertJobOrder'])->name('insert-job-order');
Route::get('/edit-page-job-order/{id}', [JobOrderController::class, 'editJobOrder'])->name('edit-page-job-order');
Route::post('/update-job-order/{id}', [JobOrderController::class, 'updateJobOrder'])->name('update-job-order');
Route::get('/view-job-order/{id}', [JobOrderController::class, 'viewJobOrder'])->name('view-job-order');
Route::get('/delete-job-order/{id}', [JobOrderController::class, 'deleteJobOrder'])->name('delete-job-order');


Route::get('/list-jos', [JobOrderStatementController::class, 'listJOS'])->name('list-jos');
Route::get('/create-jos-page', [JobOrderStatementController::class, 'addJOS'])->name('create-jos-page');
Route::post('/insert-jos', [JobOrderStatementController::class, 'createJOS'])->name('insert-jos');
Route::get('/view-jos/{id}', [JobOrderStatementController::class, 'viewJOS'])->name('view-jos');
Route::get('/delete-jos/{id}', [JobOrderStatementController::class, 'delete'])->name('delete-jos');

Route::get('/jos-export-pdf/{id}', [JobOrderStatementController::class, 'exportPDF'])->name('export-jos-pdf');

