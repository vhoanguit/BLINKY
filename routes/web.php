<?php

use Illuminate\Support\Facades\Route;
// // FE
Route::get('/', 'App\Http\Controllers\HomeController@index2'); // goi ham index trong HomeController, khi go localhost/blinky thi hien ra page luon
Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index2'); // Khi search localhost8080/blinky/trang-chu thì nó se hiện thị trang chủ
Route::post('/tim-kiem','App\Http\Controllers\HomeController@search'); 

// //BE 
// //admin
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard_login'); // phương thức của form là post
Route::get('/logout','App\Http\Controllers\AdminController@dashboard_logout'); // đăng xuất

//danh muc san pham 
Route::get('/add-category-product','App\Http\Controllers\CategoryProduct@add_category_product');
Route::get('/all-category-product','App\Http\Controllers\CategoryProduct@all_category_product');
Route::post('/save-category-product','App\Http\Controllers\CategoryProduct@save_category_product');

Route::get('/unactive-category-product/{category_pro_id}','App\Http\Controllers\CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_pro_id}','App\Http\Controllers\CategoryProduct@active_category_product');

Route::get('/edit-category-product/{category_pro_id}','App\Http\Controllers\CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_pro_id}','App\Http\Controllers\CategoryProduct@delete_category_product');
Route::post('/update-category-product/{category_pro_id}','App\Http\Controllers\CategoryProduct@update_category_product');

//san pham
Route::get('/add-product','App\Http\Controllers\ProductController@add_product');
Route::get('/all-product','App\Http\Controllers\ProductController@all_product');
Route::post('/save-product','App\Http\Controllers\ProductController@save_product');

Route::get('/unactive-product/{product_id}','App\Http\Controllers\ProductController@unactive_product');
Route::get('/active-product/{product_id}','App\Http\Controllers\ProductController@active_product');

Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\ProductController@delete_product');
Route::post('/update-product/{product_id}','App\Http\Controllers\ProductController@update_product');

// Sảm phẩm FE
Route::get('/san-pham', 'App\Http\Controllers\HomeController@sanpham');
Route::get('/danh-muc-san-pham/{category_product_id}','App\Http\Controllers\CategoryProduct@show_category_product_home');
Route::get('/chi-tiet-san-pham/{product_id}','App\Http\Controllers\ProductController@show_inside_product');

Route::post('/filter-products', 'App\Http\Controllers\ProductController@filter_products');

//Chi tiết sản phẩm
Route::get('/show-product-details/{product_id}','App\Http\Controllers\ProductController@show_product_details');
Route::get('/edit-product-details/{product_id}','App\Http\Controllers\ProductController@edit_product_details');
Route::post('/update-product-details/{product_id}','App\Http\Controllers\ProductController@update_product_details');

// Danh muc bai viet 
Route::get('/add-category-post','App\Http\Controllers\CategoryPost@add_category_post');
Route::post('/save-category-post','App\Http\Controllers\CategoryPost@save_category_post');
Route::get('/all-category-post','App\Http\Controllers\CategoryPost@all_category_post');
Route::get('/edit-category-post/{category_post_id}','App\Http\Controllers\CategoryPost@edit_category_post');// khi gõ danh_muc_bai_viet/cate_post_slug thì trả về bài viết đó
Route::post('/update-category-post/{cate_id}','App\Http\Controllers\CategoryPost@update_category_post');
Route::get('/delete-category-post/{cate_id}','App\Http\Controllers\CategoryPost@delete_category_post');

Route::get('/unactive-cate-post/{cate_post_id}','App\Http\Controllers\CategoryPost@unactive_catepost');
Route::get('/active-cate-post/{cate_post_id}','App\Http\Controllers\CategoryPost@active_catepost');

// Bai viet
Route::get('/add-post','App\Http\Controllers\PostController@add_post');
Route::post('/save-post','App\Http\Controllers\PostController@save_post');
Route::get('/all-post','App\Http\Controllers\PostController@all_post');
Route::get('/delete-post/{post_id}','App\Http\Controllers\PostController@delete_post'); // xoa theo id
Route::get('/edit-post/{post_id}','App\Http\Controllers\PostController@edit_post'); // xoa theo id
Route::post('/update-post/{post_id}','App\Http\Controllers\PostController@update_post'); // xoa theo id

Route::get('/unactive-post/{post_id}','App\Http\Controllers\PostController@unactive_post');
Route::get('/active-post/{post_id}','App\Http\Controllers\PostController@active_post');
//Hien thi danh muc bai viet
Route::get('/bai-viet/{post_slug}','App\Http\Controllers\PostController@bai_viet');
Route::get('/danh-muc-bai-viet/{cate_post_slug}','App\Http\Controllers\PostController@danh_muc_bai_viet');// khi gõ danh_muc_bai_viet/cate_post_slug thì trả về bài viết đó
// import excel 


?>