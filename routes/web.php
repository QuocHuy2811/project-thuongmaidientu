<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LienHeController;
use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\HomeController;

Route::get('/contact', [LienHeController::class, 'index'])->name('contact');
Route::post('/contact', [LienHeController::class, 'store']);
Route::get('/login', [loginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [loginController::class, 'login']);

Route::get('/', [HomeController::class, 'test_sp'])->name('home');
Route::get('/home', [HomeController::class, 'test_sp']);
Route::get('/dangnhap', function () {
    return view('dangnhap');
});
Route::get('/themsanpham', function () {
    return view('themsanpham');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/single', function () {
    return view('single');
});
Route::get('/single/{maSP}', [HomeController::class, 'show_product'])->name('single');
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/dangki', function () {
    return view('dangki');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/adminhome', function () {
    return view('adminhome');
})->middleware('web');
Route::get('/blankpageadmin', function () {
    return view('blankpageadmin');
});
Route::get('/test-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Kết nối database thành công!';
    } catch (\Exception $e) {
        return 'Lỗi kết nối: ' . $e->getMessage();
    }
});
//Route::get('/test_sp', [HomeController::class, 'test_sp']);