<?php

use App\Http\Controllers\InstallHelperController;
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

// route for demo version
// Route::get('/', function () {
//     return view('landing');
// });

// installer routes
Route::group(['prefix' => 'install',  'middleware' => ['web', 'install', 'isVerified']], function () {
    Route::get('/', [InstallHelperController::class, 'getPurchaseCodeVerifyPage'])->name('verify');
    Route::post('verify', [InstallHelperController::class, 'verifyPurchaseCode'])->name('verifyPurchaseCode');
});