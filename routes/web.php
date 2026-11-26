<?php

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Route;

Route::get('/lang/{locale}', function (Request $request, string $locale): RedirectResponse {
    $supported = ['en', 'km'];
    $target = in_array($locale, $supported, true) ? $locale : 'en';

    $request->session()->put('locale', $target);
    Cookie::queue('liva_locale', $target, 60 * 24 * 365);

    return redirect()->back(fallback: route('home'));
})->name('lang.switch');

Route::get('/', function () {
    return view('index');
})->name('home');

// Route returning the Product view
Route::get('/product', function () {
    return view('product');
})->name('product');

// Alias route for Set Product
Route::get('/set-product', function () {
    return view('product');
})->name('set-product');

// Dedicated About Us page
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/about-us', function () {
    return view('about');
});

// Dedicated Contact page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/contact-us', function () {
    return view('contact');
});

// Dedicated Checkout page
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');
