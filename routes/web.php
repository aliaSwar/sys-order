<?php

use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Customer\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->group(function (): void {
    /**
     * Protected endpoints.
    */
        Route::resource('customers/orders', OrderController::class);
        Route::resource('admin/orders', AdminOrderController::class);
        Route::get('admin/approve_order/{order}',[AdminOrderController::class,'approveOrder']);
        Route::post('admin/reject_order/{order}',[AdminOrderController::class,'rejectOrder']);
});


require __DIR__.'/auth.php';
