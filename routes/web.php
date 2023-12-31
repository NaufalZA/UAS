<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
 
Route::get('/', function () {
    return redirect('/login');
});
 
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'post'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('register.store');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'product', 'as' => 'product.'], function(){
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/create', [ProductController::class, 'store'])->name('store');
        Route::get('/buy/{id}', [ProductController::class, 'buy'])->name('buy');
        Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');
        Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('destroy');
        Route::put('/edit/{id}', [ProductController::class, 'update'])->name('update');
        Route::get('/my', [ProductController::class, 'my'])->name('my');
    });

    Route::group(['prefix' => 'profile', 'as' => 'profile.'], function(){
        Route::get('/', [ProfileController::class, 'index'])->name('index');
        Route::get('/purchase', [ProfileController::class, 'purchase'])->name('purchase');
    });
    Route::middleware('ceklevel:Admin')->group(function () {
        Route::get('/approve', [ProductController::class, 'Admin_approve'])->name('approve');
        Route::post('/approve/{id}', [ProductController::class, 'approve'])->name('product.approve');
        Route::post('/reject/{id}', [ProductController::class, 'reject'])->name('product.reject');
    });
});