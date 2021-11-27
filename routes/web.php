<?php

use App\Http\Controllers\AuthorMainController;
use App\Http\Controllers\BookMainController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PublisherMainController;
use Illuminate\Support\Facades\Route;
use phpDocumentor\Reflection\DocBlock\Tags\Author;

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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [MainController::class, 'index'])->name('home'); // Route for the 'Start side'
Route::get('user_book_list', [BookMainController::class, 'index'])->name('user_book_list');  // List of the user's book
Route::get('publisher_list', [PublisherMainController::class, 'publishers_list'])->name('list_of_publishers');
Route::get('books/{book}', [BookMainController::class, 'show'])->name('show_individual_books'); // the {book} in 'book/{book}' should match the model
Route::post('books/{book}/author', [AuthorMainController::class, 'store']);
