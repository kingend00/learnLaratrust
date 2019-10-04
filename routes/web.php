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
Route::get('/test',function(){
    echo "hoang";
});
Route::get('/addpost',function(){
    return view('addPost');
})->name('post.viewAdd');
Route::group(['prefix'=>'post'],function(){
    Route::post('/add','Post@addPost')->name('post.add');
    Route::get('/show/{id}','Post@showPost')->name('post.show');
    Route::put('/edit/{id}','Post@editPost')->name('post.edit');
    Route::get('/delete{id}','Post@deletePost')->name('post.delete');
    Route::post('/share','Post@sharePer')->name('post.share');
    Route::get('/view',function(){
        return view('user.share');
    })->name('post.viewShare');
});
Route::get('/formAdd','CategoryController@formAdd')->name('category.formAdd');
Route::get('/sharePer','CategoryController@sharePer')->name('category.sharePer');
Route::resource('category','CategoryController');
Route::resource('user','UserController');
Auth::routes();
Route::get('/run',function(){
    $role = \App\Role::where('name','super_admin')->first();
    $permission = \App\Permission::all();
    $role->attachPermissions($permission);
});
Route::get('check/{id}','CategoryController@checkPer')->name('checkPer');
Route::get('/postlist','MiddleLaratrust@redirectToPostList')->name('postlist');
Route::get('/postlist2','MiddleLaratrust@testMiddle')->name('postlist2');
Route::get('/home', 'HomeController@index')->name('home');
