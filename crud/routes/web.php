<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// Route to the main Page : index.blade.php
Route::get('/product', [ProductController::class,'index'])->name('product.index');


// Route to show the add page (create) then to sotre it in the database by the sotre
Route::get('/product/create', [ProductController::class,'create'])->name('product.create');
Route::post('/product/store', [ProductController::class,'store'])->name('product.store');


// Route to show the edit page (edit) then to update it from the database using update function
Route::get('/product/{product}/edit', [ProductController::class,'edit'])->name('product.edit');
Route::put('/product/{product}/update', [ProductController::class,'update'])->name('product.update');


// Route to delete the product from the database
Route::delete('/product/{product}/delete', [ProductController::class,'delete'])->name('product.delete');

