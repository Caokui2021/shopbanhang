<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\TestController::class, 'index']);

Route::group(['prefix' => '/admin', 'middleware' => 'AdminMiddleware'], function() {
    Route::group(['prefix' => '/danh-muc'], function() {
        Route::get('/index', [\App\Http\Controllers\admin\DanhmucController::class, 'index']);
        Route::get('/get-data', [\App\Http\Controllers\admin\DanhmucController::class, 'getData']);
        Route::get('/destroy/{id}', [\App\Http\Controllers\admin\DanhmucController::class, 'destroy']);
        Route::get('/edit/{id}', [\App\Http\Controllers\admin\DanhmucController::class, 'edit']);
        Route::get('/auto-complete', [\App\Http\Controllers\admin\DanhmucController::class, 'autoComplete']);
        Route::get('/update-status/{id}',  [\App\Http\Controllers\admin\DanhmucController::class, 'updateStatus']);

        Route::post('/index', [\App\Http\Controllers\admin\DanhmucController::class, 'store']);
        Route::post('/update', [\App\Http\Controllers\admin\DanhmucController::class, 'update']);
        Route::post('/findName', [\App\Http\Controllers\admin\DanhmucController::class, 'findName']);
    });

    Route::group(['prefix' => '/hoa-don-ban-hang'], function() {
        Route::get('/index', [\App\Http\Controllers\customer\BillController::class, 'admin_index']);
        Route::post('/index', [\App\Http\Controllers\customer\BillController::class, 'admin_store']);

        Route::get('/data', [\App\Http\Controllers\customer\BillController::class, 'getData']);
        Route::get('/chitiet/{id}', [\App\Http\Controllers\customer\BillController::class, 'getChiTiet']);

        Route::post('/search', [\App\Http\Controllers\customer\BillController::class, 'search']);

        Route::get('/thongke', [\App\Http\Controllers\customer\BillController::class, 'analytic']);

        Route::post('/thongke', [\App\Http\Controllers\customer\BillController::class, 'analyticPost'])->name('postThongKeHoaDon');
    });

    Route::group(['prefix' => '/account'], function() {
        Route::get('/index', [\App\Http\Controllers\admin\AdminController::class, 'index']);
        Route::get('/get-data', [\App\Http\Controllers\admin\AdminController::class, 'getData']);
        Route::get('/destroy/{id}', [\App\Http\Controllers\admin\AdminController::class, 'destroy']);
        Route::get('/edit/{id}', [\App\Http\Controllers\admin\AdminController::class, 'edit']);
        Route::get('/update-status/{id}',  [\App\Http\Controllers\admin\AdminController::class, 'updateStatus']);

        Route::post('/index', [\App\Http\Controllers\admin\AdminController::class, 'store']);
        Route::post('/update', [\App\Http\Controllers\admin\AdminController::class, 'update']);
        Route::post('/check-email', [\App\Http\Controllers\admin\AdminController::class, 'checkMail']);
    });

    Route::group(['prefix' => '/san-pham'], function() {
        Route::get('/index', [\App\Http\Controllers\nhanvien\SanPhamController::class, 'index']);
        Route::get('/get-data', [\App\Http\Controllers\nhanvien\SanPhamController::class, 'getData']);
        Route::get('/update-status/{id}', [\App\Http\Controllers\nhanvien\SanPhamController::class, 'updateStatus']);
        Route::get('/destroy/{id}', [\App\Http\Controllers\nhanvien\SanPhamController::class, 'destroy']);
        Route::get('/edit/{id}', [\App\Http\Controllers\nhanvien\SanPhamController::class, 'edit']);

        Route::post('/index', [\App\Http\Controllers\nhanvien\SanPhamController::class, 'store']);
        Route::post('/update', [\App\Http\Controllers\nhanvien\SanPhamController::class, 'update']);
        Route::post('/search', [\App\Http\Controllers\nhanvien\ChiTietNhapKhoController::class, 'search']);
    });

    Route::group(['prefix' => '/nhap-kho'], function() {
        Route::get('/index', [\App\Http\Controllers\nhanvien\ChiTietNhapKhoController::class, 'index']);
        Route::get('/get-data', [\App\Http\Controllers\nhanvien\ChiTietNhapKhoController::class, 'getData']);
        Route::get('/destroy/{id}', [\App\Http\Controllers\nhanvien\ChiTietNhapKhoController::class, 'destroy']);

        Route::post('/index', [\App\Http\Controllers\nhanvien\ChiTietNhapKhoController::class, 'store']);
        Route::post('/update-qty', [\App\Http\Controllers\nhanvien\ChiTietNhapKhoController::class, 'updateQty']);
        Route::post('/update-pri', [\App\Http\Controllers\nhanvien\ChiTietNhapKhoController::class, 'updatePri']);

        Route::get('/lich-su', [\App\Http\Controllers\nhanvien\ChiTietNhapKhoController::class, 'history']);
    });

    Route::group(['prefix' => '/hoa-don-nhap-kho'], function() {
        Route::get('/hoa-don', [\App\Http\Controllers\nhanvien\HoaDonNhapKhoController::class, 'storeHoaDon']);
        Route::get('/chitiet/{id}', [\App\Http\Controllers\nhanvien\HoaDonNhapKhoController::class, 'chiTiet']);
        Route::get('/thongke-hoadon', [\App\Http\Controllers\nhanvien\HoaDonNhapKhoController::class, 'analytic']);

        Route::post('/thongke-hoadon', [\App\Http\Controllers\nhanvien\HoaDonNhapKhoController::class, 'analyticPost'])->name('postThongKeNhapKho');
        Route::post('/thanhtoan-hoadon', [\App\Http\Controllers\nhanvien\HoaDonNhapKhoController::class, 'thanhToan']);
    });

    Route::get('/logout', [\App\Http\Controllers\admin\AdminController::class, 'logout']);
    Route::get('/my-profile', [\App\Http\Controllers\admin\AdminController::class, 'myProfile']);
    Route::get('/get-profile', [\App\Http\Controllers\admin\AdminController::class, 'getProfile']);

    Route::post('/my-profile', [\App\Http\Controllers\admin\AdminController::class, 'postProfile']);
    Route::post('/edit-images', [\App\Http\Controllers\admin\AdminController::class, 'EditImage']);
});

Route::group(['prefix' => '/home-pages'], function() {
    Route::get('/index', [App\Http\Controllers\customer\HomeController::class, 'index']);
    Route::get('/blog', [App\Http\Controllers\customer\HomeController::class, 'blog']);
    Route::get('/contact', [App\Http\Controllers\customer\HomeController::class, 'contact']);

    Route::get('/auto-complete', [\App\Http\Controllers\customer\HomeController::class, 'autoComplete']);
    Route::get('/shop', [App\Http\Controllers\customer\HomeController::class, 'shop']);
    // Route::post('/shop', [App\Http\Controllers\customer\HomeController::class, 'postShop']);

    Route::post('/post-complete', [\App\Http\Controllers\customer\HomeController::class, 'postComplete']);
});

Route::group(['prefix' => '/product-detail'], function() {
    Route::get('/{id}', [App\Http\Controllers\customer\HomeController::class, 'detailProduct']);
});


Route::group(['prefix' => '/product'], function() {
    Route::get('/{id}', [App\Http\Controllers\customer\HomeController::class, 'listProduct']);
});

Route::get('/search', [App\Http\Controllers\customer\HomeController::class, 'SearchProduct']);

Route::get('/transaction', [App\Http\Controllers\TransactionController::class, 'index']);

Route::group(['prefix' => '/customer', 'middleware' => 'ClientMiddleware'], function() {
    Route::group(['prefix' => '/shop-cart'], function() {
        Route::get('/cart', [App\Http\Controllers\customer\ShopCartController::class, 'index']);
        Route::get('/add-to-cart/{id}', [App\Http\Controllers\customer\ShopCartController::class, 'store']);
        Route::get('/get-data', [App\Http\Controllers\customer\ShopCartController::class, 'getData']);
        Route::get('/remove/{id}', [App\Http\Controllers\customer\ShopCartController::class, 'remove']);

        Route::post('/updateQty', [App\Http\Controllers\customer\ShopCartController::class, 'updateQty']);
        Route::post('/get-total', [App\Http\Controllers\customer\ShopCartController::class, 'getTotal']);

        Route::get('/chitiet-bill/{id}', [\App\Http\Controllers\customer\BillController::class, 'listOrder']);
        Route::get('/list-bill', [\App\Http\Controllers\customer\BillController::class, 'listBill']);

        Route::get('/bill-order', [\App\Http\Controllers\customer\BillController::class, 'index']);
    });

    Route::post('/create-bill', [App\Http\Controllers\customer\BillController::class, 'store']);

    Route::get('/my-profile', [\App\Http\Controllers\customer\InfomationController::class, 'myProfile']);
    Route::get('/get-profile', [\App\Http\Controllers\customer\InfomationController::class, 'getProfile']);

    Route::post('/my-profile', [\App\Http\Controllers\customer\InfomationController::class, 'postProfile']);
    Route::post('/edit-images', [\App\Http\Controllers\customer\InfomationController::class, 'EditImage']);
});

Route::get('/admin/login', [\App\Http\Controllers\admin\AdminController::class, 'login']);
Route::post('/admin/login', [\App\Http\Controllers\admin\AdminController::class, 'actionLogin']);

Route::get('/client/login', [\App\Http\Controllers\customer\CustomerController::class, 'viewAuth']);
Route::get('/client/register', [\App\Http\Controllers\customer\CustomerController::class, 'viewRegister']);
Route::get('/kich-hoat/{hash}', [\App\Http\Controllers\customer\CustomerController::class, 'active']);
Route::get('/client/logout', [\App\Http\Controllers\customer\CustomerController::class, 'logout']);
Route::get('/client/reset', [\App\Http\Controllers\customer\CustomerController::class, 'viewReset']);
Route::get('/client/change-reset/{hash}', [\App\Http\Controllers\customer\CustomerController::class, 'viewChange']);

Route::post('/client/register', [\App\Http\Controllers\customer\CustomerController::class, 'postRegister']);
Route::post('/client/login', [\App\Http\Controllers\customer\CustomerController::class, 'postLogin']);
Route::post('/client/reset', [\App\Http\Controllers\customer\CustomerController::class, 'postReset']);
Route::post('/client/change-reset', [\App\Http\Controllers\customer\CustomerController::class, 'postChange']);

Route::group(['prefix' => 'laravel-filemanager'], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

// Route::post('/test', [\App\Http\Controllers\TestController::class, 'test']);
