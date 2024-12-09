<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/my-deal', [PageController::class, 'myDeal']);
Route::get('/status-description', [PageController::class, 'statusDescription']);
Route::get('/document-list', [PageController::class, 'documentList']);
Route::get('/offer-agreement', [PageController::class, 'offerAgreement']);
Route::get('/payment', [PageController::class, 'payment']);
