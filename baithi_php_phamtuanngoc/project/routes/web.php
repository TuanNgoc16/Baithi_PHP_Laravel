<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
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

Route::get('/',[SearchController::class,'search'])->name('web.search');


// Bang du lieu:  database-library
// Da co du lieu trong /database/seeders/Database
// Chay lenh de hien Du lieu co san  :php artisan migrate:fresh --seed
