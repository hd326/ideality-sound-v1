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

    // Subscription routes
    Route::get('/admin/view-subscriptions', 'SubscriptionController@index');
});

Route::get('/home', 'HomeController@index')->name('home');

// Comment routes
Route::post('/comment/store', 'CommentController@store');
Route::post('/reply/store', 'CommentController@replyStore')->name('reply.add');

// Standard page routes
Route::get('/', 'PageController@home');

Route::get('/about-us', 'PageController@about')->name('about');

Route::get('/privacy-policy', 'PageController@privacy')->name('privacy');

Route::get('/disclaimer-copyright', 'PageController@disclaimer')->name('disclaimer');

Route::get('/contact-us', 'PageController@contact')->name('contact');

// Subscribe page routes

Route::post('/subscribe', 'SubscriptionController@store');

Route::get('/subscribe', 'PageController@subscribe')->name('subscribe');

Route::get('/unsubscribe', 'SubscriptionController@destroy');

Route::get('/category/', 'PageController@all');

Route::get('/category/canjam-reports', 'PageController@canjam');

Route::get('/category/canjam-reports/{tag}', 'PageController@canjam');

Route::get('/category/budget/{tag}', 'PageController@budget');

Route::get('/category/{slug}', 'PageController@category');

Route::get('/category/tags/{tag}/', 'PageController@tag');

Route::get('/category/{slug}/{subslug}', 'PageController@subcategory');

Route::get('/{slug}', 'PageController@post');



Route::post('/search', 'PageController@search');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get('/api/tags', 'Api\TagController@index');
