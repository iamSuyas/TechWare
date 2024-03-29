<?php

use App\Models\Product;
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
Route::middleware('web')->group(function(){
    //this is for user session
    Route::get('/user/logout',function(){
        Session::forget('user');
        return redirect('/');
    });
Route::get('/editUser/{id}',[UserController::class,'editUser']);
Route::post('add_to_cart',[ProductController::class,'addToCart']);
Route::post('buyimmediate',[ProductController::class,'buyImmediate']);
Route::get('cartlist',[ProductController::class,'cartlist']);
Route::get('removecart/{id}',[ProductController::class,'removeCart']);
Route::post('orderplace',[ProductController::class,'orderPlace']);
Route::get('myorder',[ProductController::class,'myOrder']);
Route::put('updatecart', [ProductController::class,'cartUpdate']);
Route::get('deleteOrder/{id}',[ProductController::class,'deleteOrder']);
}) ;



// These routes will be used when there is an admin session
Route::middleware(['web','admin'])->group(function(){
    //this is for 'admin' session 
    Route::get('admin/create', function () {
        return view('admin.create');
    });
    Route::get('/admin/logout',function(){
        Session::forget('admin');
        return redirect('/');
    });
Route::get('/admins',[UserController::class,'showAdmins']);
Route::post('/admin/register',[UserController::class,'adminRegister']);
Route::get('/admin/{id}/edit',[UserController::class,'editAdmin']);
Route::put('/admin/{id}',[UserController::class,'updateAdmin']);
Route::get('deleteAdmin/{id}',[UserController::class,'deleteAdmin']);
Route::get('/users',[UserController::class,'showUsers']);
Route::get('deleteUser/{id}',[UserController::class,'deleteUser']);
Route::get('admin/products',[ProductController::class,'getProducts']);
Route::get('admin/createProductPage',[ProductController::class,'createProductPage']);
Route::post('admin/createProduct',[ProductController::class,'createProduct']);
Route::get('deleteProduct/{id}',[ProductController::class,'deleteProduct']);
Route::get('admin/orders',[ProductController::class,'orderPage']);
Route::get('/product/{id}/edit',[ProductController::class,'editProduct']);
Route::put('/product/{id}',[ProductController::class,'updateProduct']);
Route::get('admin/brandinfo',[ProductController::class,'brandInfo']);
Route::post('/createBrand',[ProductController::class,'createBrand']);
Route::post('/createCategory',[ProductController::class,'createCategory']);
Route::get('deleteBrand/{id}',[ProductController::class,'deleteBrand']);
Route::get('deleteCategory/{id}',[ProductController::class,'deleteCategory']);
Route::put('/changeStatus',[ProductController::class,'changeStatus']);

});







//these routes will be used only when there is no user/admin session i.e. user/admin is logged out

Route::middleware('guest')->group(function(){

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
    Route::get('/',[ProductController::class,'index']);
    Route::get('/allProducts',[ProductController::class,'allProducts']);
    Route::get('/filterProducts',[ProductController::class,'filterProducts']);
    Route::get('detail/{id}',[ProductController::class,'detail']);
    Route::get('search',[ProductController::class,'search']);
});




//these routes will be used whether user is logged in or not






