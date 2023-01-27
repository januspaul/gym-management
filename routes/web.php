<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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

Route::get('/', [MemberController::class, 'index'])->name('index');
Route::get('/create', [MemberController::class, 'create'])->name('create');
Route::get('/delete/{id}', [MemberController::class, 'delete'])->name('delete');
Route::get('/update/{id}', [MemberController::class, 'update'])->name('update');
