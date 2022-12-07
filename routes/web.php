<?php

use App\Http\Controllers\Controller;
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

/**
 * Add a new route named "send-email". Upon accessing this URL, the "sendEmail"
 * function inside the "EmailController" class will be triggered.
 */
Route::get('send-email', [App\Http\Controllers\EmailController::class, 'sendEmail']);