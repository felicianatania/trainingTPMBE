<?php

use App\Http\Controllers\BookController;
use Illuminate\Routing\Route as RoutingRoute;
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
    return view('welcome'); //welcome sesuai view bladenya
}); //bawa kita ke suatu view yg ada di folder views sesuai nama .php nya

// Route::get('/create', function(){
//     return view('create'); //view nya sesuai blade ye //ini bisa di pindahin ke controller
// });

Route::get('/create', [BookController::class,'getCreatePage'])->name('getCreatePage'); //getCreatePage in nama function di controllernya

Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');

Route::get('/get-books', [BookController::class, 'getBooks'])->name('getBooks');

Route::get('/update-book/{id}', [BookController::class, 'getBookById'])->name('getBookById');

Route::patch('/update-book/{id}', [BookController::class, 'updateBook'])->name('updateBook');

Route::delete('/delete-book/{id}', [BookController::class, 'deleteBook'])->name('delete');

Route::get('/hello', function () {
    echo('Hello World');
});

