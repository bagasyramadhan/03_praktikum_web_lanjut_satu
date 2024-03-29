<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\HobiController;
use App\Http\Controllers\ProfileController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


//Product
// Route::prefix('product')->group(function (){
//     Route::get('/', [ProductController::class, 'home']);
//     Route::get('/1', function(){
//         return redirect("https://www.educastudio.com/category/marbel-edu-games");
//     });
//     Route::get('/2', function(){
//         return redirect("https://www.educastudio.com/category/marbel-and-friends-kids-games");
//     });
//     Route::get('/3', function(){
//         return redirect("https://www.educastudio.com/category/riri-story-books");
//     });
//     Route::get('/4', function(){
//         return redirect("https://www.educastudio.com/category/kolak-kids-songs");
//     });

// });

// //news
// Route::get('/news', [NewsController::class, 'home']);
// Route::get('/news/{id}', function ($id){
//     if ($id == 1) {
//         return redirect("https://www.educastudio.com/news");
//     } else if ($id == 2) {
//         return redirect("https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitarterdampak-covid-19");
//     }
// });

// //program
// Route::prefix('program')->group(function (){
//     Route::get('/', [ProgramController::class, 'home']);
//     Route::get('/karir', function(){
//         return redirect("https://www.educastudio.com/program/karir");
//     });
//     Route::get('/magang', function(){
//         return redirect("https://www.educastudio.com/program/magang");
//     });
//     Route::get('/kunjungan', function(){
//         return redirect("https://www.educastudio.com/program/kunjungan-industri");
//     });
    
// });

// //Contact us
// Route::get('/contact-us', function(){
//     return redirect("https://www.educastudio.com/contact-us");
// });
// Route::get('/contact', [ContactUsController::class, 'home']);

// //About Us
// Route::get('/about-us', function(){
//     return redirect("https://www.educastudio.com/about-us");
// });
// Route::get('/about', [AboutUsController::class, 'home']);


// Route::get('/', [HomeController::class, 'home']);

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/sekolah', [HomeController::class, 'sekolah']);
// Route::get('/profile', [HomeController::class, 'profile']);
// Route::get('/kuliah', [HomeController::class, 'kuliah']);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/pengalaman', [PengalamanController::class, 'index'])->name('pengalaman');  
Route::get('hobi/{slug}', [HobiController::class, 'show'])
    ->name('detail');  

Route::get('/hobi', [HobiController::class, 'index'])->name('hobi');