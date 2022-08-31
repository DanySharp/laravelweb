<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PostController;
use  App\Http\Controllers\ShowPostCategoryController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Admin\AdminCommentController;
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

Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/most','App\Http\Controllers\Frontend\PostMost@index')->name('partials.most');
Route::get('/', 'App\Http\Controllers\Frontend\MostController@showmost');
Route::get('/about','App\Http\Controllers\Admin\AboutController@index')->name('partials.about');


Route::group(['middleware' => 'admin'],function (){


    Route::get('admin/contacts','App\Http\Controllers\Admin\AdminContactController@index')->name('contacts.index');
    Route::resource('contacts','App\Http\Controllers\Admin\AdminContactController');

    Route::get('admin/showlinks','App\Http\Controllers\Admin\AdminShowLinkController@index')->name('showlinks.index');
    Route::resource('showlinks','App\Http\Controllers\Admin\AdminShowLinkController');


    Route::resource('admin/users','App\Http\Controllers\Admin\AdminUserController');
    Route::resource('admin/posts','App\Http\Controllers\Admin\AdminPostController');

    Route::resource('admin/category','App\Http\Controllers\Admin\AdminCategoryController');
    Route::resource('admin/files','App\Http\Controllers\Admin\AdminFilesController');
    Route::get('admin/dashboard','App\Http\Controllers\Admin\DashboardController@index')->name('dashboard.index');
    Route::get('admin/comments','App\Http\Controllers\Admin\AdminCommentController@index')->name('comments.index');
    Route::patch('admin/comments','App\Http\Controllers\Admin\AdminCommentController@edit')->name('comments.edit');
    Route::post('admin/actions/{id}','App\Http\Controllers\Admin\AdminCommentController@actions')->name('comments.actions');


    Route::get('admin/comments/{id}', 'App\Http\Controllers\Admin\AdminCommentController@edit')->name('comments.edit');
    Route::patch('admin/comments/{id}', 'App\Http\Controllers\Admin\AdminCommentController@update')->name('comments.update');
    Route::delete('admin/comments/{id}', 'App\Http\Controllers\Admin\AdminCommentController@destroy')->name('comments.destroy');

    Route::delete('admin/delete/files','App\Http\Controllers\Admin\AdminFilesController@deleteAll')->name('photo.delete.all');


  //  Route::get('admin/files/uploads', [ 'as'=> 'files/uploads','use' => 'App\Http\Controllers\Admin\AdminFilesController@upload']);

});
Route::get('/','App\Http\Controllers\Frontend\MainController@index');

Route::get('posts/{slug}', 'App\Http\Controllers\Frontend\PostController@show')->name('frontend.posts.show');

Route::get('search', 'App\Http\Controllers\Frontend\PostController@searchTitle' )->name('frontend.posts.search');
Route::post('comments/{postId}', 'App\Http\Controllers\Frontend\CommentController@store')->name('frontend.comments.store');

Route::post('comments}', 'App\Http\Controllers\Frontend\CommentController@reply' )->name('frontend.comments.reply');

Route::get('/category/{category:slug}', [ShowPostCategoryController::class, 'show'])->name('category.show');
