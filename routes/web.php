<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend;
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

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index']);
Route::get('/albums', [Frontend\AlbumController::class, 'index']);
Route::get('/blog', [Frontend\BlogController::class, 'index']);
Route::get('/event', [Frontend\EventController::class, 'index']);
Route::get('/findfriend', [Frontend\FindFriendController::class, 'index']);
Route::get('/game', [Frontend\GameController::class, 'index']);
Route::get('/group', [Frontend\GroupController::class, 'index']);
Route::get('/market', [Frontend\MarketController::class, 'index']);
Route::get('/job', [Frontend\JobController::class, 'index']);
Route::get('/funding', [Frontend\FundingController::class, 'index']);
Route::get('/offer', [Frontend\OfferController::class, 'index']);
Route::get('/page', [Frontend\PageController::class, 'index']);
Route::get('/popular-post', [Frontend\PopularPostController::class, 'index']);
Route::get('/timeline', [Frontend\TimelineController::class, 'index']);


