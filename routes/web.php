<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryProduct;
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
// ---------frontend----------
Route::get('/', function () {
    return view('welcome');
});


//----------BACKEND(dashboard)---------------

//vào trang login đăng nhập
Route::get('admin-login/', [AdminController::class, 'index'])->name('admin-login');
// vào trang chủ bảng điều khiển
Route::get('dashboard/',[AdminController::class, 'show_dashboard']);
// logout
Route::get('logout/', [AdminController::class, 'logout'])->name('logout');
// vào trang chủ bảng điều khiển khi login
Route::post('admin-dashbord/',[AdminController::class, 'dashboard']);

// ----------- Category Product Dashboard---------

//trang hiển danh mục sản phẩm
Route::get('add-category-product/', [CategoryProduct::class, 'add_category_product'])->name('add-category-product');
// trang hiển thị liệt kê danh mục sản phẩm 
Route::get('all-category-product/',[CategoryProduct::class, 'all_category_product'])->name('all-category-product');

//  đường dẫn nút hiện  trong liệt kê danh mục sản phẩm
Route::get('active-category-product/{category_product_id}',[CategoryProduct::class, 'active_category_product'])->name('active-category-product');
//  đường dẫn nút ẩn trong liệt kê danh mục sản phẩm
Route::get('unactive-category-product/{category_product_id}',[CategoryProduct::class, 'unactive_category_product'])->name('unactive-category-product');

// lưu danh mục sau khi được thêm
Route::post('save-category-product/',[CategoryProduct::class, 'save_category_product'])->name('save-category-product');
// cập nhật danh mục sau khi được thêm
Route::post('update-category-product/{category_product_id}',[CategoryProduct::class, 'update_category_product'])->name('update-category-product');

// sửa danh mục sản phẩm trong liệt kê danh mục
Route::get('edit-category-product/{category_product_id}',[CategoryProduct::class, 'edit_category_product'])->name('edit-category-product');
// xóa danh mục sản phẩm trong liệt kê danh mục
Route::get('delete-category-product/{category_product_id}',[CategoryProduct::class, 'deletee_category_product'])->name('delete-category-product');