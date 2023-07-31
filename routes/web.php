<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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


//these routes will be used when there is user session 
Route::get('admin/create', function () {
    return view('admin.create');
});
Route::get('/logout', function () {
    
    Session::forget('user');
    return redirect('/');
});


Route::get('/admins',[UserController::class,'showAdmins']);
Route::get('/logout',[UserController::class,'logout']);
Route::post('/admin/register',[UserController::class,'adminRegister']);
Route::get('/admin/{id}/edit',[UserController::class,'editAdmin']);
Route::put('/admin/{id}',[UserController::class,'updateAdmin']);
Route::get('deleteAdmin/{id}',[UserController::class,'deleteAdmin']);


Route::post('add_to_cart',[ProductController::class,'addToCart']);
Route::post('buyimmediate',[ProductController::class,'buyImmediate']);
Route::get('cartlist',[ProductController::class,'cartlist']);
Route::get('removecart/{id}',[ProductController::class,'removeCart']);
Route::post('orderplace',[ProductController::class,'orderPlace']);
Route::get('myorder',[ProductController::class,'myOrder']);
Route::put('updatecart', [ProductController::class,'cartUpdate']);
Route::get('deleteOrder/{id}',[ProductController::class,'deleteOrder']);

Route::get('admin/products',[ProductController::class,'getProducts']);


Route::get('admin/createProductPage',[ProductController::class,'createProductPage']);
Route::post('admin/createProduct',[ProductController::class,'createProduct']);
Route::get('deleteProduct/{id}',[ProductController::class,'deleteProduct']);
Route::get('admin/orders',[ProductController::class,'orderPage']);

Route::get('/product/{id}/edit',[ProductController::class,'editProduct']);
Route::put('/product/{id}',[ProductController::class,'updateProduct']);

//these routes will be used only when there is no user session i.e. user is logged out

Route::get('/login', function () {
    return view('login');
});
Route::get('admin/login', function () {
    return view('adminLogin');
});


Route::get('/register', function () {
    return view('register');
});

Route::post('/login',[UserController::class,'login']);
Route::post('admin/loginattempt',[UserController::class,'adminLogin']);
Route::post('/register',[UserController::class,'register']);

//these routes will be used whether user is logged in or not
Route::get('/',[ProductController::class,'index']);
Route::get('detail/{id}',[ProductController::class,'detail']);
Route::get('search',[ProductController::class,'search']);






