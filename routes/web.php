<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\StaffLoginController;
use App\Http\Controllers\{
    BankController,
    DepartmentController,
    RoleController,
    CompanyController,
    BillTypeController,
    BillController,
    ClearedBillController,
    VendorController,
    BillDetailController,
    DocumentController,
    VehicleController,
    CompanyVehicleController,
    ExpirationController,
    DashboardController,
    PageController,
    CompanyAccountController,
    BillCategoryController,
    BillPaymentDetailController,
    BillManagerCommentsController,
    VendorAccountController,
    VehicleCategoryController,
    VehicleInsuranceController
};
use App\Http\Controllers\BusinessEfficiency\{
    EfficiencySetupController,
    MainObjectiveController,
    SubObjectiveController,
    PerformanceEvaluationController,
    EfficiencyPaymentController,
    EfficiencyCostController,
    PerformanceRegulationController
};


Route::middleware('splade')->group(function () {
    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware(['verified'])->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });

    require __DIR__ . '/auth.php';



    /* my routes */
    Route::prefix('staff-dashboard')->middleware(['auth', 'preventBacktrack'])->group(function () {
        Route::resource('company-account', CompanyAccountController::class)->except('show');
        Route::get('bank-details/{bank}', [BankController::class, 'bankDetails'])->name('bank-details');
        Route::resource('bank', BankController::class)->except('create', 'show');
        Route::resource('department', DepartmentController::class);
        Route::resource('role', RoleController::class);
        Route::resource('company', CompanyController::class);
        Route::prefix('bill-payment')->group(function () {
            Route::resource('bill-category', BillCategoryController::class)->except('show');
            Route::resource('bill-type', BillTypeController::class);
            Route::resource('cleared-bill', ClearedBillController::class);
            Route::resource('bill-detail', BillDetailController::class);
            Route::get('add-new-bill', [BillController::class, 'create'])->name('bill.create');
            Route::resource('bill', BillController::class)->except('create');
            Route::resource('bill-payment-detail', BillPaymentDetailController::class)->except('show');
            Route::resource('bill-manager-comments', BillManagerCommentsController::class)->except('show');
        });
        Route::prefix('manage-vendors')->group(function () {
            Route::resource('vendor-account', VendorAccountController::class);
            Route::resource('vendor', VendorController::class);
        });
        /* Vehicle Document Routings */
        Route::prefix('vehicle-documentation')->group(function () {
            Route::resource('document', DocumentController::class);
            Route::resource('vehicle', VehicleController::class);
            Route::resource('company-vehicle', CompanyVehicleController::class);
            Route::resource('expiration', ExpirationController::class);
            Route::resource('vehicle-category', VehicleCategoryController::class);
            Route::resource('vehicle-insurance', VehicleInsuranceController::class);
        });
        Route::prefix('business-efficiency')->group(function () {
            Route::prefix('efficiency-setup')->group(function () {
                Route::resource('main-objective', MainObjectiveController::class);
                Route::prefix('main-objective')->group(function () {
                    Route::resource('sub-objectives', SubObjectiveController::class);
                });
            });
            Route::resource('efficiency-setup', EfficiencySetupController::class);
            Route::resource('performance-evaluation', PerformanceEvaluationController::class);
            Route::resource('efficiency-payment', EfficiencyPaymentController::class);
            Route::resource('efficiency-cost', EfficiencyCostController::class);
            Route::resource('performance-regulation', PerformanceRegulationController::class);
        });
        /* Application Dashboard index page */

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    });

    // Route::get('/check-login-status', [PageController::class, 'checkLogin'])->name('checkLogin');
    //Route::get('/', [PageController::class, 'index'])->name('landing-page');
    Route::resource('user-account', App\Http\Controllers\UserAccountController::class);
    Route::prefix('admin')->group(function () {
        

    });
});