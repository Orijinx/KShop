<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;
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

//Главные страницы
Route::get('/', [MainController::class,"IndexView"])->name('home');
Route::get('/cart',[MainController::class,"CartView"]);
Route::get('/shop',[MainController::class,"ShopView"]);
Route::get('/shop/{id}',[MainController::class,"ShopTagView"]);
Route::get('/orders',[MainController::class,"OrderView"]);
Route::get('/search',[MainController::class,"SearchView"]);
Route::get('/brand/{id}',[MainController::class,"BrandView"]);
Route::get('/orders',[MainController::class,"OrderView"]);


//Управление корзиной
Route::post('/addItem',[CartController::class,"addItem"]);
Route::post('/delItem',[CartController::class,"delItem"]);
Route::post('/destroyItem',[CartController::class,"destroyItem"]);
Route::post('/addtocart',[CartController::class,"addToCart"]);

//Управление заказом
Route::post('/makeOrder',[OrderController::class,"makeOrder"]);

//Множественные ссылки
Route::get('/product/{id}',[MainController::class,"ProductView"]);


//Панель администратора
Route::get('/admin',[AdminController::class,"AdminView"]);
Route::get('/add-product',[AdminController::class,"addProductView"]);
Route::get('/brands',[AdminController::class,"BrandsView"]);
Route::get('/tags',[AdminController::class,"TagsView"]);
Route::get('/all-product',[AdminController::class,"allProducts"]);
Route::get('/aorder',[AdminController::class,"OrderView"]);
// Измениения из админки
Route::post('/addProduct',[AdminController::class,"addProduct"]);
Route::post('/addBrand',[AdminController::class,"addBrand"]);
Route::post('/delBrands',[AdminController::class,"DelBrands"]);
Route::post('/addTag',[AdminController::class,"addTag"]);
Route::post('/updateTag',[AdminController::class,"updateTag"]);
Route::post('/deleteTag',[AdminController::class,"deleteTag"]);
Route::get('/getStat',[AdminController::class,"GetStat"]);
Route::get('/getIndexStat',[AdminController::class,"GetIndexStat"]);




//
//Аутентификация
Auth::routes();

Route::get('/home', 'HomeController@index');
