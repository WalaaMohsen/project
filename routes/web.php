<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Artisan;

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
Route::get('/show_product',function () {
    Artisan::call('images:show_product');
    
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [Controller::class,'show_home'])->name('home'); 
Route::get('/show_product',[Controller::class,'show_product'])->name('show_product');
Route::get('/showsingle_product',[Controller::class,'showsingle_product'])->name('showsingle_product');
Route::get('/buy',[Controller::class,'buy'])->name('buy');
Route::get('/add_cart',[Controller::class,'add_cart'])->name('add_cart');
Route::get('/about',[Controller::class,'show_about'])->name('about');
Route::get('/contact',[Controller::class,'show_contact'])->name('contact');
Route::get('/notes',[Controller::class,'notes'])->name('notes');
Route::get('/sign',[Controller::class,'sign'])->name('sign');
Route::post('/sign_user',[Controller::class,'sign_user'])->name('sign_user');
Route::get('/login_form',[adminController::class,'login_form'])->name('login_form');
Route::get('/admin_login',[adminController::class,'admin_login'])->name('admin_login');
Route::get('/register_form',[Controller::class,'register_form'])->name('register_form');
Route::get('/register',[Controller::class,'register_user'])->name('register');
Route::get('/show',[adminController::class,'show'])->name('show');
Route::delete('/destroy/{id}',[adminController::class,'destroy'])->name('destroy');
Route::get('/update/{id}',[adminController::class,'update'])->name('update');
Route::put('/edit/{id}',[adminController::class,'edit'])->name('edit');
Route::get('/show_order',[adminController::class,'show_order'])->name('show_order');
Route::delete('/destroy_order/{id}',[adminController::class,'destroy_order'])->name('destroy_order');
Route::get('/update_order/{id}',[adminController::class,'update_order'])->name('update_order');
Route::put('/edit_order/{id}',[adminController::class,'edit_order'])->name('edit_order');
Route::get('/show_form_add',[adminController::class,'show_form_add'])->name('show_form_add_order');
Route::get('/add_order',[adminController::class,'add_order'])->name('add_order');
Route::get('/show_carts',[adminController::class,'show_carts'])->name('show_carts');
Route::get('/show_products',[adminController::class,'show_products'])->name('show_products');
Route::delete('/destroy_product/{id}',[adminController::class,'destroy_product'])->name('destroy_product');
Route::get('/update_product/{id}',[adminController::class,'update_product'])->name('update_product');
Route::put('/edit_product/{id}',[adminController::class,'edit_product'])->name('edit_product');
Route::get('/show_form_add_product',[adminController::class,'show_form_add_product'])->name('show_form_add_product');
Route::get('/add_product',[adminController::class,'add_product'])->name('add_product');
Route::get('/notes_user',[adminController::class,'notes_user'])->name('notes_user');
Route::delete('/destroy_notes/{id}',[adminController::class,'destroy_notes'])->name('destroy_notes');























