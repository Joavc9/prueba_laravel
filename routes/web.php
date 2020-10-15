<?php
// //Routes for auth
Auth::routes();
Route::get('/inicio','HomeController@index')->name('home');
Route::get('/back','Auth\RegisterController@back')->name('back');

//Routes for products
Route::middleware(['auth'])->group(function () {
Route::get('/products','ProductController@index')->name('products.index');
Route::get('/products/create','ProductController@create')->name('product.create');
Route::post('/products/store','ProductController@store')->name('product.store');
Route::get('/products/edit/{id}','ProductController@edit')->name('product.edit');
Route::patch('/products/update','ProductController@update')->name('product.update');
Route::delete('/products/delete','ProductController@destroy')->name('product.delete');

// Routes categories
Route::get('/categories','CategoryController@index')->name('categories.index');
Route::get('/categories/create','CategoryController@create')->name('category.create');
Route::post('/categories/store','CategoryController@store')->name('category.store');
Route::get('/categories/edit/{id}','CategoryController@edit')->name('category.edit');
Route::patch('/categories/update','CategoryController@update')->name('category.update');
Route::delete('/categories/delete','CategoryController@destroy')->name('category.delete');

//Routes quotes
Route::get('/quotes','QuotationController@index')->name('quotes.index');
Route::get('/quotes/create','QuotationController@create')->name('quotation.create');
Route::post('/quotes/store','QuotationController@store')->name('quotation.store');
Route::get('/quotes/edit/{id}','QuotationController@edit')->name('quotation.edit');
Route::patch('/quotes/update','QuotationController@update')->name('quotation.update');
Route::delete('/quotes/delete','QuotationController@destroy')->name('quotation.delete');
Route::get('/quotes/download/{id}','QuotationController@download')->name('quotation.download');
Route::get('/quotes/send/{id}','QuotationController@sendEmail')->name('quotation.send');

//Route folders
Route::get('/folders','FolderController@index')->name('folders.index');
Route::get('/folders','FolderController@create')->name('folders.create');
Route::post('/folders/store','FolderController@store')->name('folder.store');

});
