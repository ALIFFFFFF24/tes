<?php

use App\Http\Controllers\categoriesController;
use App\Http\Controllers\portofoliosController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('client.page.home', [
        'title' => 'Halaman Home',
        'active' => 'home'
    ]);
});

Route::get('/about', function () {
    return view('client.page.static.about', [
        'title' => 'Halaman About',
        'active' => 'about'
    ]);
});

Route::get('/contact', function () {
    return view('client.page.static.contact', [
        'title' => 'Halaman Contact',
        'active' => 'contact'
    ]);
});

Route::get('/profile', function () {
    return view('client.page.user.profile', [
        'title' => 'Halaman Profile',
        'active' => 'profile'
    ]);
});

Route::get('/addCategory', function () {
    return view('client.page.category.tambah', [
        'title' => 'Halaman Tambah Kategori',
        'active' => 'category'
    ]);
});

Route::post('/category/store', [categoriesController::class, 'store']);

Route::get('/addPortofolio', function () {
    return view('client.page.portofolio.tambah', [
        'title' => 'Halaman Tambah Portofolio',
        'active' => 'portofolio'
    ]);
});

Route::post('/portofolio/store', [portofoliosController::class, 'store']);


// Route::get('/user', function () {
//     return view('client.page.user.index', [
//         'title' => 'Halaman User',
//         'active' => 'user'
//     ]);
// });

Route::get('/user', [usersController::class, 'index']);


// Route::get('/category', function () {
//     return view('client.page.category.index', [
//         'title' => 'Halaman Kategori',
//         'active' => 'category'[]
//     ]);
// });

Route::get('/category', [categoriesController::class, 'index']);

// Route::get('/portofolio', function () {
//     return view('client.page.portofolio.index', [
//         'title' => 'Halaman Portofolio',
//         'active' => 'portofolio'
//     ]);
// });

Route::get('/portofolio', [portofoliosController::class, 'index']);


Route::get('/dashboard', function () {
    return view('client.page.dashboard.index', [
        'title' => 'Halaman Dashboard',
        'active' => 'dashboard'
    ]);
});

Route::get('/portofolio/detail', function () {
    return view('client.page.portofolio.show', [
        'title' => 'Halaman Detail',
        'active' => 'show-portofolio'
    ]);
});

Route::get('/admin', function () {
    return view('server.pages.index', [
        'title' => 'Halaman Admin',
        'active' => 'admin'
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
