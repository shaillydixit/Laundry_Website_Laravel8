<?php

use App\Http\Controllers\FrontendController;
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
    return view('index');
});


Route::get('aboutus', [FrontendController::class, 'About'])->name('about');

Route::get('ourservices', [FrontendController::class, 'OurServices'])->name('our.service');

Route::get('pricing', [FrontendController::class, 'Pricing'])->name('pricing');

Route::get('contactus', [FrontendController::class, 'Contact'])->name('contact');

Route::get('terms-and-conditions', [FrontendController::class, 'TermAndConditions'])->name('terms');
