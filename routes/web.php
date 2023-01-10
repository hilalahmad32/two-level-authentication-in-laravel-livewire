<?php

use App\Http\Livewire\User\Auth\Login;
use App\Http\Livewire\User\Auth\Pattren;
use App\Http\Livewire\User\Auth\Register;
use App\Http\Livewire\User\Profile;
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

Route::get('/',Profile::class)->name('profile');
Route::get('/register',Register::class)->name('register');
Route::get('/login',Login::class)->name('login');
Route::get('/pattern',Pattren::class)->name('pattern');
