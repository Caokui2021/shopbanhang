<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\DanhMuc;
use App\Models\ChiTietNhapKho;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $danhmuc = DanhMuc::where('is_open', 1)->orderBy('ten_danh_muc')->get();
        $topdanhmuc = DanhMuc::where('is_open', 1)->where('id_danh_muc_cha', 0)->orderBy('ten_danh_muc')->take(5)->get();
        $instagram = DanhMuc::where('is_open', 1)->orderBy('ten_danh_muc')->take(6)->get();
        view()->share('danhmuc', $danhmuc);
        view()->share('topdanhmuc', $topdanhmuc);
        view()->share('instagram', $instagram);
    }
}
