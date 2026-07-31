<?php

use Illuminate\Support\Facades\Route;
use App\Models\Subsector;
use App\Http\Controllers\AssessmentController;
use App\Http\Controllers\InfrastructureController;
use App\Http\Controllers\ManufacturingController;
use App\Http\Controllers\AgricultureController;
use App\Http\Controllers\FinanceController;
use App\Http\Controllers\MiningController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LanguageController;

Route::get('/', function (){
    if(auth()->check()){
        return redirect()->route('dashboard'); 
    }
    return redirect()->route('login');
});

Route::middleware('auth')->group(function (){

    // rute viewer
    Route::get('/dashboard',[DashboardController::class,'index'])
        ->name('dashboard');

    // list indikator
    Route::get('/assessments', [AssessmentController::class, 'index'])->name('assessments.index');
    // tambah 
    Route::get('/assessments/create', [AssessmentController::class, 'create'])->name('assessments.create');
    // simpan 
    Route::post('/assessments', [AssessmentController::class, 'store'])->name('assessments.store');
    // list subsektor
    Route::get('/subsectors/{sector}', [AssessmentController::class, 'getSubsectors'])
    ->name('subsectors.bySector');
    // tampilkan isi indikator
    Route::get('/assessments/{assessment}/report', [AssessmentController::class, 'report'])->name('assessments.report');
    // edit
    Route::get('/assessments/{assessment}/edit', [AssessmentController::class, 'edit'])->name('assessments.edit');
    // update
    Route::put('/assessments/{assessment}', [AssessmentController::class, 'update'])->name('assessments.update');
    // hapus
    Route::delete('/assessments/{assessment}', [AssessmentController::class, 'destroy'])->name('assessments.destroy');

    // rute infrastruktur
    Route::get('/assessments/{assessment}/infrastructure', [InfrastructureController::class, 'index'])->name('infrastructure.input');
    Route::post('/assessments/{assessment}/infrastructure', [InfrastructureController::class, 'save'])->name('infrastructure.save');
    // 

    // rute manufaktur
    Route::get('/assessments/{assessment}/manufacturing', [ManufacturingController::class, 'index'])->name('manufacturing.input');
    Route::post('/assessments/{assessment}/manufacturing', [ManufacturingController::class, 'save'])->name('manufacturing.save');

    // rute agrikultur
    Route::get('/assessments/{assessment}/agriculture', [AgricultureController::class, 'index'])->name('agriculture.input');
    Route::post('/assessments/{assessment}/agriculture', [AgricultureController::class, 'save'])->name('agriculture.save');

    // rute keuangan
    Route::get('/assessments/{assessment}/finance', [FinanceController::class, 'index'])->name('finance.input');
    Route::post('/assessments/{assessment}/finance', [FinanceController::class, 'save'])->name('finance.save');

    // rute pertambangan
    Route::get('/assessments/{assessment}/mining', [MiningController::class, 'index'])->name('mining.input');
    Route::post('/assessments/{assessment}/mining', [MiningController::class, 'save'])->name('mining.save');

    // pdf export
    Route::post('/assessment/{assessment}/pdf', [PDFController::class,'report'])->name('assessment.pdf');

});

Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::resource('users', UserController::class);
    });

Route::get('/language/{locale}', [LanguageController::class,'switch'])
    ->name('language.switch');

require __DIR__.'/auth.php';