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
    return view('frontend.home');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/admin/book', 'BooksController@index')->name('get.list.book');
    Route::get('/admin/book/create', 'BooksController@create')->name('get.create.book');
    Route::post('/admin/book/store', 'BooksController@store')->name('post.store.book');
    Route::get('/admin/book/edit/{id}', 'BooksController@edit')->name('get.store.edit.book');
    Route::post('/admin/book/edit/post', 'BooksController@postedit')->name('post.edit.book');
    Route::get('/admin/book/delete/post{id}', 'BooksController@delete')->name('post.delete.book');


    Route::get('/admin/order', 'OrderController@index')->name('get.list.order');
    Route::get('/admin/order/details/{id}', 'OrderController@details')->name('get.details.order');
    Route::post('/admin/order/update/status/', 'OrderController@update_status')->name('get.update.status.order');
    Route::get('/admin/order/report', 'OrderController@report')->name('get.order.report');
    Route::get('/admin/order/rs', 'OrderController@report_search')->name('get.order.search');


    Route::get('/admin/book/categories', 'BookCategoryController@index')->name('get.list.category.book');
    Route::get('/admin/book/categories/create', 'BookCategoryController@create')->name('get.create.category.book');
    Route::post('/admin/book/categories/store', 'BookCategoryController@store')->name('post.store.category.book');
    Route::get('/admin/book/categories/edit/{id}', 'BookCategoryController@edit')->name('get.store.edit.category.book');
    Route::post('/admin/book/categories/edit/post', 'BookCategoryController@postedit')->name('post.edit.category.book');
    Route::get('/admin/book/categories/delete/post{id}', 'BookCategoryController@delete')->name('post.delete.category.book');

    
    Route::get('/admin', 'PostController@index')->name('get.list.post');
    Route::get('/admin/blog/create', 'PostController@create')->name('get.create.post');
    Route::post('/admin/blog/store', 'PostController@store')->name('post.store.post');
    Route::get('/admin/blog/edit/{id}', 'PostController@edit')->name('get.store.edit');
    Route::post('/admin/blog/post/edit/post', 'PostController@postedit')->name('post.edit.post');
    Route::get('/admin/blog/delete/post{id}', 'PostController@delete')->name('post.delete.post');


    Route::get('/admin/category/list', 'CategoryController@index')->name('get.list.category');
    Route::get('/admin/category/create', 'CategoryController@create')->name('get.create.category');
    Route::post('/admin/category/store', 'CategoryController@store')->name('post.store.category');
    Route::get('/admin/category/edit/{id}', 'CategoryController@edit')->name('get.edit.category');
    Route::post('/admin/category/postedit', 'CategoryController@postedit')->name('post.edit.category');
    Route::get('/admin/category/delete{id}', 'CategoryController@delete')->name('post.delete.category');


    Route::get('/admin/list/slider', 'SliderController@index')->name('get.list.slider');
    Route::get('/admin/slider/create', 'SliderController@create')->name('get.create.slider');
    Route::post('/admin/slider/store', 'SliderController@store')->name('post.store.slider');
    Route::get('/admin/slider/edit/{id}', 'SliderController@edit')->name('get.edit.slider');
    Route::post('/admin/slider/post/edit/post', 'SliderController@postedit')->name('post.edit.slider');
    Route::get('/admin/slider/delete/post{id}', 'SliderController@delete')->name('post.delete.slider');

    Route::get('/admin/aboutushome/edit', 'AboutUsHomeController@edit')->name('get.edit.aboutushome');
    Route::post('/admin/aboutushome/post/edit/post', 'AboutUsHomeController@postedit')->name('post.edit.aboutushome');

    Route::get('/admin/donation/info/edit', 'DonationInfomationController@edit')->name('get.edit.donationinfomation');
    Route::post('/admin/donation/info/post/edit/post', 'DonationInfomationController@postedit')->name('post.edit.donationinfomation');

    Route::get('/admin/newsletter/list', 'FrontendController@list_newsletter')->name('get.list.newsletter');
    Route::get('/admin/newsletter/delete/{id}', 'FrontendController@delete_newsletter')->name('newsletter.delete.post');
});


Route::get('/blog', 'FrontendController@listpost')->name('frontend.get.list.post');
Route::get('/blog/{id}', 'FrontendController@post')->name('frontend.get.post');
Route::get('/blog/category/{id}', 'FrontendController@category_post')->name('frontend.get.category.post');


Route::get('/listbook', 'FrontendController@listbook')->name('frontend.get.list.listbook');
Route::get('/listbook/{id}', 'FrontendController@book')->name('frontend.get.book');
Route::get('/listbook/category/{id}', 'FrontendController@category_book')->name('frontend.get.category.book');

Route::get('/search', 'FrontendController@search_book')->name('public.search.book');
Route::get('/search/blog', 'FrontendController@search_blog')->name('public.search.blog');

Route::post('/addtocart', 'FrontendController@addtocart')->name('frontend.add.to.cart');
Route::get('/public/cart', 'FrontendController@cart')->name('frontend.public.cart');
Route::post('/update/cart', 'FrontendController@updatecart')->name('frontend.update.cart');
Route::get('/delete/cart{id}', 'FrontendController@deletecart')->name('frontend.delete.cart');
Route::get('/checkout', 'FrontendController@checkout')->name('frontend.checkout');
Route::post('/checkout/post', 'FrontendController@checkout_post')->name('frontend.checkout.post');
Route::get('/checkout/thanks', 'FrontendController@checkout_thanks')->name('frontend.checkout.thanks');


Route::get('/contact', function () {
    return view('frontend.contact');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/public/newsletter', 'FrontendController@newsletter_post')->name('frontend.post.newsletter');
