<?php

use App\Http\Controllers\Admin\NoticiasController;
use App\Http\Controllers\Home\ContatoController;
use App\Http\Controllers\Home\HomeController as HomeHomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.pages.index');
Route::get('/sobre', [HomeController::class, 'sobre'])->name('home.pages.sobre');
Route::get('/contatos', [HomeController::class, 'contatos'])->name('home.pages.contatos');
Route::post('/contatos/store', [ContatoController::class, 'store'])->name('home.pages.contact.store');


Route::get('/dashboard', function () {
    return view('admin.pages.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //noticias
    Route::get('/admin/noticias', [NoticiasController::class, 'index'])->name('admn.pages.noticias.index');

});

//login
Route::post('/auth', [HomeHomeController::class, 'authenticate'])->name('admin.auth');

require __DIR__.'/auth.php';
