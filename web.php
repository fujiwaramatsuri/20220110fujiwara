<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controll;

Route::get('/building',[Controll::class,'index']);
Route::post('/',[Controll::class,'post']);
Route::get('/verror', [Controll::class, 'verror']);
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

/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return 'test';
});
