<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return redirect('/list');
});

Route::get('/login1', [TestController::class, 'login_for_first_page']);

Route::get('/login2', [TestController::class, 'login_for_second_page']);
Route::post('/login2_post', [TestController::class, 'login_for_second_page_post']);

Route::get('/login3', [TestController::class, 'login_for_third_page']);

Route::get('/login4', [TestController::class, 'login_for_fourth_page']);
Route::post('/login4_post', [TestController::class, 'login_for_fourth_page_post']);

Route::get('/login5', [TestController::class, 'login_for_fifth_page']);
Route::post('/login5_post', [TestController::class, 'login_for_fifth_page_post']);

Route::get('/login6', [TestController::class, 'login_for_sixth_page']);
Route::post('/login6_post', [TestController::class, 'login_for_sixth_page_post']);

Route::get('/login7', [TestController::class, 'login_for_seventh_page']);
Route::post('/login7_post', [TestController::class, 'login_for_seventh_page_post']);

Route::get('/list', [TestController::class, 'getProducts']);
