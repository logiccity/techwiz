<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages_default;

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
Route::view('/', 'frontend.index');
Route::view('/about', 'frontend.about');
Route::view('/blog', 'frontend.blog');
Route::view('/contact', 'frontend.contact');
Route::view('/login', 'frontend.loginpage');
Route::view('/project', 'frontend.project');
Route::view('/service', 'frontend.service');
Route::view('/blogdetails', 'frontend.single');
Route::view('/product', 'frontend.product');
Route::view('/checkout', 'frontend.checkout');
Route::view('/AddToCart', 'frontend.AddToCart');

Route::get('/charts', function () {
    return view('PAGES.dashboard-pages.charts.chartjs');
});

Route::get('/dashboard-index', function () {
    return view('PAGES.dashboard-index');
});

Route::get('/basic-elements', function () {
    return view('PAGES.dashboard-pages.forms.basic_elements');
});

Route::get('/mdi', function () {
    return view('PAGES.dashboard-pages.icons.mdi');
});

Route::get('/error-404', function () {
    return view('PAGES.dashboard-pages.samples.error-404');
});

Route::get('/error-500', function () {
    return view('PAGES.dashboard-pages.samples.error-500');
});

Route::get('/login', function () {
    return view('PAGES.dashboard-pages.samples.login');
});

Route::get('/register', function () {
    return view('PAGES.dashboard-pages.samples.register');
});

Route::get('/dashboard-table', function () {
    return view('PAGES.dashboard-pages.tables.basic-table');
});

Route::get('/dashboard-button', function () {
    return view('PAGES.dashboard-pages.ui-features.buttons');
});

Route::get('/dropdowns', function () {
    return view('PAGES.dashboard-pages.ui-features.dropdowns');
});

Route::get('/typography', function () {
    return view('PAGES.dashboard-pages.ui-features.typography');
});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role==0){
            //ADMIN ROLE
            return view('dashboard');
            }
            elseif(Auth::User()->role==2){
                return view('third');
            }
            else{
            return view('welcome');
            }

    })->name('dashboard');
});
