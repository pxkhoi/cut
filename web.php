<?php

use Illuminate\Support\Facades\Route;
//  use Http\Controller\HomeController;
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

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', 'HomeController@index');
    
    Route::get('/users_detail', function () {
        return "admin/users_detail";
    })->name('1');
    Route::get('/total_account', function () {
        return "/admin/total_account";
    })->name('2');
    Route::get('/total_user_account', function () {
        return "/admin/total_user_account"; 
    })->name('3');
    Route::get('/total_merchant_account', function () {
        return "/admin//total_merchant_account"; 
    })->name('4');
    Route::get('/tong/{a}/{b}', function ($a,$b) {
        $c = $a + $b;
        return "Tong la : ".$c; 
    })->where(['a', '[0-9]+'],['b', '[0-9]+']);
});