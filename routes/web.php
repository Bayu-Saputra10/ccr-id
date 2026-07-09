<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\InfrastructureController;
use App\Http\Controllers\ManufacturingController;
use App\Http\Controllers\AgricultureController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\MiningController;
use App\Http\Controllers\PDFController;
use App\Models\Subsector;

Route::get('/', function () {
    return redirect()->route('assessments.index');
});

Route::get('/assessments', [AssessmentController::class, 'index'])->name('assessments.index');

Route::get('/assessments/create', [AssessmentController::class, 'create'])->name('assessments.create');

Route::post('/assessments', [AssessmentController::class, 'store'])->name('assessments.store');

Route::get('/subsectors/{sector}', function ($sector){
    return Subsector::where('sector', $sector)->orderBy('name')->get();
});

Route::get('/assessments/{assessment}/report', [AssessmentController::class, 'report'])->name('assessments.report');

// infrastruktur
Route::get('/assessments/infrastructure', [InfrastructureController::class, 'index'])->name('infrastructure.input');

Route::post('/assessments/infrastructure', [InfrastructureController::class, 'save'])->name('infrastructure.save');

// manufaktur
Route::get('/assessments/manufacturing', [ManufacturingController::class, 'index'])->name('manufacturing.input');

Route::post('/assessments/manufacturing', [ManufacturingController::class, 'save'])->name('manufacturing.save');

// agrikultur
Route::get('/assessments/agriculture', [AgricultureController::class, 'index'])->name('agriculture.input');
Route::post('/assessments/agriculture', [AgricultureController::class, 'save'])->name('agriculture.save');

// keuangan
Route::get('/assessments/finance', [FinanceController::class, 'index'])->name('finance.input');
Route::post('/assessments/finance', [FinanceController::class, 'save'])->name('finance.save');

// energi & tambang
Route::get('/assessments/mining', [MiningController::class, 'index'])->name('mining.input');
Route::post('/assessments/mining', [MiningController::class, 'save'])->name('mining.save');

// pdf export
Route::post('/assessment/{assessment}/pdf', [PDFController::class,'report'])->name('assessment.pdf');