<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('user/home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile/Dashbord', [ProfileController::class, 'index'])->name('profile.Dashbord');
    Route::get('/profile/Edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.home');

// For navigationBar
Route::get('/package', function () {
    return view('user/package');
})->name('package');

Route::get('/package/page', function () {
    return view('user/packagePage');
})->name('packagePage');

Route::get('/aboutUs', function () {
    return view('user/aboutUs');
})->name('aboutUs');

Route::get('/contactUs', function () {
    return view('user/contactUs');
})->name('contactUs');

Route::get('/blog', function () {
    return view('user/blog');
})->name('blog');

Route::get('/blogPage', function () {
    return view('user/blogPage');
})->name('blogPage');