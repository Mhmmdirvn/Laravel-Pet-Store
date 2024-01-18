<?php

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

// Memanggil controller Routes

use App\Http\Controllers\Routes;

Route::get('/', [Routes::class, 'Home']);
Route::get('/tentang', [Routes::class, 'About']);
Route::get('/adopsi', [Routes::class, 'Adopsi']);
Route::get('/aksesoris', [Routes::class, 'Aksesoris']);
Route::get('/hubungi', [Routes::class, 'Contact']);
