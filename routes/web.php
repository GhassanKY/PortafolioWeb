<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\loginUser;
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

Route::get('/', function () {
    return view('welcome');
})->name('home');

/* las rutas que se estan progamando aqui es para verificar si ya estas
autenticado de lo contrario te redirecciona a Login
 */

Route::get('login', function(){
    return view('login.login');
})->name('login')->middleware('guest');

Route::get('Inicio',function(){
    return view('login.inicio');
})->name('inicio')->middleware('auth');

/* Recibimos la informacion enviada por el metodo post si la Autenticacion es
correcta, se redirecciona */

Route::post('login', [loginUser::class, 'Login']);

/* Esta route que tenemos declarada es para el envio de contacto en la pagina 
welcome */

Route::post('contactanos', [ContactanosController::class, 'store'])->name('store');
