<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

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

Route::get('/', [WebsiteController::class, 'show']);

Route::get('/signin', [WebsiteController::class, 'loginShow']);
Route::post('/signin', [WebsiteController::class, 'login']);

Route::get('/publications', [WebsiteController::class, 'publications']);

Route::get('/gallery', [WebsiteController::class, 'gallery']);

Route::get('/team', [WebsiteController::class, 'team']);

Route::get('/logout', [WebsiteController::class, 'logout']);