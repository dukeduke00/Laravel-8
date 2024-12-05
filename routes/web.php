<?php

use App\Http\Controllers\ProductController;
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



Route::get("/", [\App\Http\Controllers\HomeController::class,"index"]);

Route::get("/shop", [\App\Http\Controllers\ShopController::class, "getAllProducts"]);

Route::get("/contact", [\App\Http\Controllers\ContactController::class, "index"]);

Route::view("/about", "about");

Route::post("/send-contact", [\App\Http\Controllers\ContactController::class, "sendContact"]);

Route::get("/admin/all-contacts", [\App\Http\Controllers\ContactController::class, "getAllContacts"]);

Route::get("/admin/all-products", [\App\Http\Controllers\ProductController::class, "getAllProducts"])
->name("sviProizvodi");

Route::view("/admin/add-product", "addProduct");

Route::post("admin/save-product", [\App\Http\Controllers\ProductController::class, "addProduct"])
->name("snimanjeOglasa");

Route::get("/admin/delete-product/{product}", [\App\Http\Controllers\ProductController::class, "deleteProduct"])
->name("obrisiProizvod");


Route::get("/admin/delete-contact/{contact}", [\App\Http\Controllers\ContactController::class, "deleteContact"])
    ->name("obrisiKontakt");


Route::get('/admin/edit-product/{product}', [\App\Http\Controllers\ProductController::class, 'editProduct'])
    ->name('editProizvod');

Route::post('/admin/update-product/{product}', [\App\Http\Controllers\ProductController::class, 'updateProduct'])
    ->name('updateProizvod');
