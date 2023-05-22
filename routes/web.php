<?php

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

Route::get('/', function () {
    $data = ['products' => config('db.products')];
    return view('home', $data);
})->name('home');
Route::get('/comics/{id}', function ($id) {
    $products = config('db.products');
    if ($id >= 0 && count($products)) {
        $product = $products[$id];
        return view('comics.comic', compact('product'));
    }
})->name('comic');
