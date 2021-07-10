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
Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){
    Route::get('/','Backend\HomeController@index');
    Route::get('order','Backend\OrderController@order')->name('admin.order');
    Route::get('order_detail/{id}','Backend\OrderController@order_detail')->name('admin.order_detail');

//product
Route::get('danh-sach-san-pham','Backend\ProductController@list')->name('listProduct');
Route::get('them-san-pham','Backend\ProductController@add')->name('addProduct');
Route::post('saveAdd','Backend\ProductController@saveAdd')->name('saveAdd');
Route::get('sua-san-pham/{id}','Backend\ProductController@editProduct')->name('editPro');
Route::post('sua-san-pham/{id}','Backend\ProductController@saveEdit')->name('saveEdit');
Route::post('xoa-san-pham/{id}','Backend\ProductController@deletePro')->name('deletePro');

//category
Route::get('danh-sach-danh-muc','Backend\CategoryController@list')->name('listCate');
Route::get('them-danh-muc','Backend\CategoryController@getAdd')->name('addCate');
Route::post('them-danh-muc','Backend\CategoryController@postAdd')->name('postAdd');
Route::get('sua-danh-muc/{id}','Backend\CategoryController@edit')->name('editCate');
Route::post('sua-danh-muc/{id}','Backend\CategoryController@postEdit')->name('postEdit');
Route::post('xoa-danh-muc/{id}','Backend\CategoryController@deleteCate')->name('deleteCate');
//slider
Route::get('list-slider', 'Backend\SliderController@list')->name('list_slider');
Route::get('slider','Backend\SliderController@add')->name('slider');
Route::post('postslider','Backend\SliderController@postadd')->name('postadd');
Route::post('xoa-slider/{id}','Backend\SliderController@deleteSlide')->name('deleteSlide');

//tintuc
Route::get('danh-sach-tin-tuc','Backend\TintucController@list')->name('listTintuc');
Route::get('them-tin-tuc','Backend\TintucController@getAdd')->name('addTintuc');
Route::post('them-tin-tuc','Backend\TintucController@postAddTT')->name('postAddTintuc');
Route::get('sua-tin-tuc/{id}','Backend\TintucController@editTintuc')->name('editTintuc');
Route::post('sua-tin-tuc/{id}','Backend\TintucController@saveEditTintuc')->name('saveEditTintuc');
Route::post('xoa-tin-tuc/{id}','Backend\TintucController@deleteTintuc')->name('deleteTintuc');

    // Route::group(['prefix'=>'product'], function(){
        
    // });
});

// //product
// Route::get('admin/danh-sach-san-pham','Backend\ProductController@list')->name('listProduct');
// Route::get('admin/them-san-pham','Backend\ProductController@add')->name('addProduct');
// Route::post('/admin/saveAdd','Backend\ProductController@saveAdd')->name('saveAdd');
// Route::get('admin/sua-san-pham/{id}','Backend\ProductController@editProduct')->name('editPro');
// Route::post('/admin/sua-san-pham/{id}','Backend\ProductController@saveEdit')->name('saveEdit');
// Route::post('/admin/xoa-san-pham/{id}','Backend\ProductController@deletePro')->name('deletePro');


//category
// Route::get('/admin/danh-sach-danh-muc','Backend\CategoryController@list')->name('listCate');
// Route::get('/admin/them-danh-muc','Backend\CategoryController@getAdd')->name('addCate');
// Route::post('/admin/them-danh-muc','Backend\CategoryController@postAdd')->name('postAdd');
// Route::get('/admin/sua-danh-muc/{id}','Backend\CategoryController@edit')->name('editCate');
// Route::post('/admin/sua-danh-muc/{id}','Backend\CategoryController@postEdit')->name('postEdit');
// Route::post('/admin/xoa-danh-muc/{id}','Backend\CategoryController@deleteCate')->name('deleteCate');

//slide
// Route::get('/admin/list-slider', 'Backend\SliderController@list')->name('list_slider');
// Route::get('/admin/slider','Backend\SliderController@add')->name('slider');
// Route::post('/admin/postslider','Backend\SliderController@postadd')->name('postadd');
// Route::post('/admin/xoa-slider/{id}','Backend\SliderController@deleteSlide')->name('deleteSlide');

//tintuc
// Route::get('/admin/danh-sach-tin-tuc','Backend\TintucController@list')->name('listTintuc');
// Route::get('/admin/them-tin-tuc','Backend\TintucController@getAdd')->name('addTintuc');
// Route::post('/admin/them-tin-tuc','Backend\TintucController@postAddTT')->name('postAddTintuc');
// Route::get('admin/sua-tin-tuc/{id}','Backend\TintucController@editTintuc')->name('editTintuc');
// Route::post('/admin/sua-tin-tuc/{id}','Backend\TintucController@saveEditTintuc')->name('saveEditTintuc');
// Route::post('/admin/xoa-tin-tuc/{id}','Backend\TintucController@deleteTintuc')->name('deleteTintuc');







//login
Route::get('/login','Backend\LoginController@index')->name('login');

//Fontend
Route::get('/','Fontend\FontendController@homepage')->name('homepage');
Route::get('/gioi-thieu','Fontend\FontendController@introduce')->name('introduce');
Route::get('/huong-dan-mua-sach','Fontend\FontendController@tutorial')->name('tutorial');
Route::get('/chinh-sach-mua-hang','Fontend\FontendController@policy')->name('policy');
Route::get('/lien-he','Fontend\FontendController@contact')->name('contact');
Route::get('/chi-tiet-san-pham/{id}','Fontend\FontendController@detail')->name('detail');
Route::get('/danh-muc-sach/{id}','Fontend\FontendController@danhmucsach')->name('danhmucsach');
Route::get('/tin-tuc','Fontend\FontendController@tintuc')->name('tintuc');
Route::get('/chi-tiet-tin-tuc/{id}','Fontend\FontendController@detailTintuc')->name('detadetailTintucil');
Route::get('/su-kien-sale','Fontend\FontendController@sukiensale')->name('sukiensale');


Route::get('getAddCart/{id}', 'Fontend\FontendController@getAddCart')->name('getAddCart');
Route::get('deleteCart/{id}', 'Fontend\FontendController@deleteCart')->name('deleteCart');
// order
Route::post('order','CartController@order')->name('order');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');