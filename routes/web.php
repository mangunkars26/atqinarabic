<?php

use App\Http\Controllers\Back\CategoryController;
use App\Http\Controllers\Back\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FaqController;

Route::get('/', function () {
    return view('home', [
        'title' => 'Beranda'
    ]);
});
// routes/web.php

Route::prefix('programs')->group(function () {
    Route::get('/private', function () {
        return view('programs.private', [
            'title' => 'Private Class'
        ]);
    });
    Route::get('/regular', function () {
        return view('programs.regular', [
            'title' => 'Regular Class'
        ]);
    });
    Route::get('/kelas-gratis', function () {
        return view('programs.kelas-gratis', [
            'title' => 'Kelas Gratis'
        ]);
    });
});

//FAQ
Route::prefix('faqs')->group(function () {
    Route::get('faqs-create', function () {
        return view('faqs.create', [
            'title' => 'Create FAQ'
        ]);
    });
    Route::get('faqs-update', function () {
        return view('faqs.update', [
            'title' => 'Edit FAQ'
        ]);
    });
    Route::get('faqs-show', function () {
        return view('faqs.show', [
            'title' => 'Show FAQ'
        ]);
    });
});


Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profil'
    ]);
});

Route::get('/registration', function () {
    return view('registration', [
        'title' => 'Registrasi'
    ]);
});
Route::get('/testimoni', function () {
    return view('testimoni', [
        'title' => 'Testimoni'
    ]);
});
Route::get('/blog', function () {
    return view('blog', [
        'title' => 'Blog'
    ]);
});

Route::get('/contact', function () {
    return view('contact', [
        'title' => 'Kontak'
    ]);
});
Route::resource('faqs', FaqController::class);

//Blog
Route::get('/dashboard', [DashboardController::class, 'index']);

// Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('categories.update');

Route::resource('categories', CategoryController::class)->only([
    'index', 'store', 'update', 'destroy'
]);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
