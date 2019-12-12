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

Auth::routes();

// Login routes
Route::get('/admin', 'AdminController@loginPage');
Route::post('/admin', 'AdminController@loginAction');

// Admin routes
Route::group(['middleware' => ['admin']], function(){

    Route::get('/admin/dashboard', 'AdminController@loginDashboard');

    // Category routes
    Route::get('/admin/view-categories', 'CategoryController@index');
    Route::get('/admin/add-category', 'CategoryController@create');
    Route::post('/admin/add-category', 'CategoryController@store');
    Route::get('/admin/edit-category/{id}', 'CategoryController@edit');
    Route::post('/admin/edit-category/{id}', 'CategoryController@update');
    
    // Posts routes
    Route::get('/admin/view-posts', 'PostController@index');
    Route::get('/admin/add-post', 'PostController@create');
    Route::post('/admin/add-post', 'PostController@store');
    Route::get('/admin/edit-post/{id}', 'PostController@edit');
    Route::post('/admin/edit-post/{id}', 'PostController@update');
    Route::get('/admin/view-post/{id}', 'PostController@show');
    
    // Post Images routes
    Route::get('/admin/add-images/{id}', 'PostImageController@create');
    Route::post('/admin/add-images/{id}', 'PostImageController@store');
    Route::get('/admin/delete-alt-image/{id}', 'PostImageController@destroy');

    // Tags routes
    Route::get('/admin/view-tags', 'TagController@index');
    Route::get('/admin/add-tag', 'TagController@create');
    Route::post('/admin/add-tag', 'TagController@store');
    Route::get('/admin/edit-tag/{id}', 'TagController@edit');
    Route::post('/admin/edit-tag/{id}', 'TagController@update');
    Route::get('/admin/view-tag/{id}', 'TagController@show');

});

// Blog post routes
//Route::get('/blog', 'BlogController@index');
//Route::get('/blog/{slug}', 'BlogController@show');

// Blog routes as a tag
// Review routes as a tag
// Cause they are tags
// Categories are not tags
// Everything leads back to a post however...


// Standard page routes
Route::get('/', 'PageController@home');
    // Page consisting of the *review tags
//Route::get('/reviews', 'PageController@review');
    // Page consisting of the *categories 
Route::get('/category/{slug}/{subslug?}', 'PageController@categories');
    // Page consisting of an *actual post
Route::get('/{slug}', 'PageController@post');
    // Page consisting of *specified tags
Route::get('/tags/{tag}/', 'PageController@tag');

Route::get('/home', 'HomeController@index')->name('home');
