<?php

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

Auth::routes();

// トップページ
Route::get('/home', 'HomeController@index')->name('home');

// カテゴリリソース
// index,create,store,show,edit,destroy
Route::resource('categories', 'CategoriesController');

// 記事リソース
// index,create,store,show,edit,destroy
Route::resource('posts', 'PostsController');

// 削除済み記事一覧
Route::get('trashed-posts', 'PostsController@trashed')->name('trashed-posts.index');
// 削除済み記事の復元
Route::put('restore-post/{post}', 'PostsController@restore')->name('restore-posts');
