<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ChiTietNhapKho;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index() {
        $topSanPham = ChiTietNhapKho::join('san_phams', 'chi_tiet_nhap_khos.id_san_pham', 'san_phams.id')
                                    ->wherenotnull('id_hoa_don_nhap_kho', null)
                                    ->select('chi_tiet_nhap_khos.*', 'san_phams.hinh_anh', 'san_phams.ma_san_pham')
                                    ->take(8)
                                    ->orderbyDesc('chi_tiet_nhap_khos.id')
                                    ->get();

        return view('customer.pages.home', compact('topSanPham'));
    }

    // public function test(Request $request) {
    //     dd($request->all());
    // }
}
