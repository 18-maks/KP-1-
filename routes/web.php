<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SendMailController;
use App\Http\Controllers\CheckoutController;

// уведомление о покупке
// use App\Http\Controllers\CheckoutController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Маршрут для обработки заказа (доступен только авторизованным пользователям)
    Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
});

// уведомление о покупке
// Route::post('/checkout', [CheckoutController::class, 'checkout']);

Route::get('/index', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('index');


Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');



// Показать форму отправки почты
Route::get('/indexO', function() {
    return view('indexO');
})->middleware(['auth', 'verified'])->name('indexO');

Route::post('/send-mail', [SendMailController::class, 'sendMail'])->name('sendMail');

require __DIR__.'/auth.php';
