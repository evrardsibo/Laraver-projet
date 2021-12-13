<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UniqueController;
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
    return view('welcome');
});

Route::get('/form',[MainController::class, 'index'])->middleware('evr');

Route::get('/test', [MainController::class, 'test']);

Route::get('/unique',UniqueController::class);

Route::resource('articles', ArticleController::class);

// Route::get('/env' , function(){
//     dd(env('DB_DATABASE'));
// });
// Route::get('/env' , function(){
//     return response()->json([
//         'Nom' => 'sibomana',
//         'Prenom' => 'evrard',
//         'age' => 39,
//         'campus' => 'charleroi Becode'
//     ]);
// });

// Route::prefix('admin')->group(function(){
//     Route::get('article',function(){
//         return 'articles';
//     });

//     Route::get('list',function(){
//         return'list';
//     });

//     Route::get('author',function(){
//         return 'author';
//     });

// });
