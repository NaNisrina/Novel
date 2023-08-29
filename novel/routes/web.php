<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignInController;
use App\Http\Controllers\ProfilePageController;
use App\Http\Controllers\RecommendationsController;
use App\Http\Controllers\TrendingPageController;
use App\Http\Controllers\YourLibraryController;
use App\Http\Controllers\YourStoryController;
use App\Http\Controllers\CoverDescriptionController;
use App\Http\Controllers\CreateStoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReadingPageController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\EditStoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\SettingController;
use App\Models\HomePage;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

// home
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/HomePage', [HomePageController::class, 'homepage'])->name('homepage');
Route::get('/Login', [LoginController::class, 'index'])->name('login');
Route::get('/SignIn', [SignInController::class, 'index'])->name('signin');
Route::post('/SignIn', [SignInController::class, 'store'])->name('signin');

// navbar
Route::get('/ProfilePage', [ProfilePageController::class, 'profilepage'])->name('profile');
Route::get('/Setting', [SettingController::class, 'setting'])->name('setting');
Route::get('/Favorite', [FavoriteController::class, 'favorite'])->name('favorite');
Route::get('/Genre', [GenreController::class, 'genre'])->name('genre');

// page
Route::get('/Recommendations', [RecommendationsController::class, 'recommendations'])->name('recommendantions');
Route::get('/TrendingPage', [TrendingPageController::class, 'trendingpage'])->name('trendingpage');
Route::get('/YourLibrary', [YourLibraryController::class, 'yourlibrary'])->name('yourlibrary');
// story
Route::get('/YourStory', [YourStoryController::class, 'yourstory'])->name('yourstory');
Route::get('/EditStory', [EditStoryController::class, 'index'])->name('editstory');
Route::get('/Create', [CreateStoryController::class, 'create'])->name('create');

Route::get('/CoverDescription', [CoverDescriptionController::class, 'coverdescription'])->name('coverdescription');
Route::get('/ReadingPage', [ReadingPageController::class, 'readingpage'])->name('readingpage');

Route::get('editstory', [EditStoryController::class, 'index'])->name('EditStory');

// Route::get('/test', [HomeController::class, 'test'])->name('test');

// welcome
// Route::get('/', function () {
//     return view('welcome');
// });
