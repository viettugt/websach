<?php

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

//Backend
Route::get('/admin','Backend\HomeController@index');
//product
Route::get('admin/danh-sach-san-pham','Backend\ProductController@list')->name('listProduct');
Route::get('admin/them-san-pham','Backend\ProductController@add')->name('addProduct');
Route::post('/admin/saveAdd','Backend\ProductController@saveAdd')->name('saveAdd');
Route::get('admin/sua-san-pham/{id}','Backend\ProductController@editProduct')->name('editPro');
Route::post('/admin/sua-san-pham/{id}','Backend\ProductController@saveEdit')->name('saveEdit');
Route::post('/admin/xoa-san-pham/{id}','Backend\ProductController@deletePro')->name('deletePro');


//category
Route::get('/admin/danh-sach-danh-muc','Backend\CategoryController@list')->name('listCate');
Route::get('/admin/them-danh-muc','Backend\CategoryController@getAdd')->name('addCate');
Route::post('/admin/them-danh-muc','Backend\CategoryController@postAdd')->name('postAdd');
Route::get('/admin/sua-danh-muc/{id}','Backend\CategoryController@edit')->name('editCate');
Route::post('/admin/sua-danh-muc/{id}','Backend\CategoryController@postEdit')->name('postEdit');
Route::post('/admin/xoa-danh-muc/{id}','Backend\CategoryController@deleteCate')->name('deleteCate');

//slide
Route::get('/admin/list-slider', 'Backend\SliderController@list')->name('list_slider');
Route::get('/admin/slider','Backend\SliderController@add')->name('slider');
Route::post('/admin/postslider','Backend\SliderController@postadd')->name('postadd');
Route::post('/admin/xoa-slider/{id}','Backend\SliderController@deleteSlide')->name('deleteSlide');




//login
Route::get('/login','Backend\LoginController@index')->name('login');

//Fontend
Route::get('/','Fontend\FontendController@homepage')->name('homepage');
Route::get('/gioi-thieu','Fontend\FontendController@introduce')->name('introduce');
Route::get('/huong-dan-mua-sach','Fontend\FontendController@tutorial')->name('tutorial');
Route::get('/chinh-sach-mua-hang','Fontend\FontendController@policy')->name('policy');
Route::get('/lien-he','Fontend\FontendController@contact')->name('contact');
Route::get('/chi-tiet-san-pham/{id}','Fontend\FontendController@detail')->name('detail');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
