<?php
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\TypesController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\messagesController;
use App\Http\Controllers\portfoliosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customAuthsController;
use App\Http\Controllers\interface\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');

Route::resource('clients', ClientsController::class);
Route::resource('types', TypesController::class);
Route::resource('portfolios',portfoliosController::class);
Route::resource('tasks', TasksController::class);
Route::get('/login', [customAuthsController::class,'login'])->name('login');
Route::get('/registration', [customAuthsController::class,'registration'] )->name('registration');
Route::post('/register-user', [customAuthsController::class,'registerUser'] )->name('register-user');
Route::post('/login-user', [customAuthsController::class,'loginUser'] )->name('login-user');
Route::get('/logout-user', [customAuthsController::class,'logoutUser'] )->name('logout-user');
Route::get('/create', [messagesController::class,'create'])->name('create');
Route::post('/create-message', [messagesController::class,'store'] )->name('create-message');
Route::get('/index', [messagesController::class,'index'])->name('index');
Route::get('/destroy/{id}', [messagesController::class,'destroy'])->name('Messages.destroy');


