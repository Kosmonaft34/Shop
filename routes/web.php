<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserController;
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

Route::get('/',[IndexController::class,'Index']) -> name ('index');//Маршрут на главную страницу

Route::get('/registration',[UserController::class,'register'])->name('register');// страница с регистрацией
Route::post('/registration',[UserController::class, 'create'])->name('create');//регистрация

Route::get('/logout', [UserController::class, 'logout'])->name('logout'); //страница с авторизацией
Route::post('/logout',[UserController::class, 'auth'])->name('auth'); //авторизация

Route::get('/private/{UserID}',[UserController::class, 'private'])->name('privat');//личный кабинет
Route::get('/private/profile/',[UserController::class, 'profile'])->name('profile');//Мой профиль
Route::get('/private/order',[UserController::class, 'orders'])->name('orders');//Мои заказы
Route::get('/private/basket',[UserController::class, 'basket'])->name('basket'); // Корзина


Route::get('/delivery)',[DeliveryController::class, 'delivery'])->name('delivery');//Доставка

Route::get('/stoke', [StokeController::class, 'stok'])->name('stok');//Акции

Route::get('/catalog', [CatalogController::class, 'catalog'])->name('catalog');//Каталог

Route::get('/contacts', [ContactsController::class, 'contacts'])->name('contacts');//Контакты
