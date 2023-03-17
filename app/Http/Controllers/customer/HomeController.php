<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiTietNhapKho;
use App\Models\DanhMuc;
use App\Models\SanPham;

class HomeController extends Controller
{
    public function index() {
        $topSanPham = ChiTietNhapKho::join('san_phams', 'chi_tiet_nhap_khos.id_san_pham', 'san_phams.id')
                                    ->wherenotnull('id_hoa_don_nhap_kho', null)
                                    ->select('chi_tiet_nhap_khos.*', 'san_phams.hinh_anh', 'san_phams.ma_san_pham')
                                    ->take(8)
                                    ->orderbyDesc('chi_tiet_nhap_khos.id')
                                    ->get();
        // dd($topSanPham->toArray());
        return view('customer.pages.home', compact('topSanPham'));
    }
    public function blog(){
        return view('customer.blog');
    }
    public function contact(){
        return view('customer.contact');
    }
    public function shop() {
        $topSanPham = ChiTietNhapKho::join('san_phams', 'chi_tiet_nhap_khos.id_san_pham', 'san_phams.id')
                                    ->wherenotnull('id_hoa_don_nhap_kho', null)
                                    ->select('chi_tiet_nhap_khos.*', 'san_phams.hinh_anh', 'san_phams.ma_san_pham')
                                    ->take(16)
                                    // ->orderbyDesc('chi_tiet_nhap_khos.id')
                                    // ->get();
                                    ->orderBy('chi_tiet_nhap_khos.id', 'desc')->get();
        // dd($topSanPham->toArray());
        return view('customer.pages.shop', compact('topSanPham'));
    }
    // public function postShop(Request $request) {

    //     $topSanPham = ChiTietNhapKho::join('san_phams', 'chi_tiet_nhap_khos.id_san_pham', 'san_phams.id')
    //                                 ->wherenotnull('id_hoa_don_nhap_kho', null)
    //                                 ->select('chi_tiet_nhap_khos.*', 'san_phams.hinh_anh', 'san_phams.ma_san_pham')
    //                                 ->take(16)
    //                                 ->orderBy('chi_tiet_nhap_khos.id', 'asc')->get();
    //     // dd($topSanPham->toArray());
    //     return view('customer.pages.shop', compact('topSanPham'));
    // }

    public function detailProduct($id) {
        $detail = SanPham::join('danh_muc', 'san_phams.danh_muc_id', 'danh_muc.id')
                            ->where('san_phams.id', $id)
                            ->select('san_phams.*' , 'danh_muc.ten_danh_muc')
                            ->first();
//s
        $hinh_anh = explode(',', $detail->hinh_anh);
        //  dd($hinh_anh);

        return view('customer.pages.product-details', compact('detail'));
    }

    // sản phẩm trong product
    public function listProduct($id) {
        $danhMucCha = DanhMuc::find($id);
        if($danhMucCha) {
            // Nếu là danh mục con
            if($danhMucCha->id_danh_muc_cha > 0) {
                $SanPham = ChiTietNhapKho::join('san_phams', 'chi_tiet_nhap_khos.id_san_pham', 'san_phams.id')
                                             ->where('is_open', 1)
                                             ->where('danh_muc_id', $danhMucCha->id)
                                             ->select('san_phams.*', 'chi_tiet_nhap_khos.don_gia_nhap')
                                             ->get();
                // dd($SanPham->toArray());
            } else {
                // Nó là danh mục cha. Tìm toàn bộ danh mục con
                $danhMucChaCon = DanhMuc::where('id_danh_muc_cha', $danhMucCha->id)
                                            ->get();
                $danhSach   = $danhMucCha->id;
                foreach($danhMucChaCon as $key => $value) {
                    $danhSach = $danhSach . ',' . $value->id;
                }
                $SanPham = ChiTietNhapKho::join('san_phams', 'chi_tiet_nhap_khos.id_san_pham', 'san_phams.id')
                                             ->select('san_phams.*', 'chi_tiet_nhap_khos.don_gia_nhap')
                                             ->whereIn('danh_muc_id', explode(",", $danhSach))->get();
            }
        }

        return view('customer.pages.product', compact( 'SanPham', 'danhMucCha'));
    }

    // public function Search(Request $request) {
    //     $search     = $request->search;

    //     $searchSP    = ChiTietNhapKho::where('id_san_pham', 'like', '%'.$search.'%')
    //                          ->orWhere('ten_san_pham', 'like', '%'.$search.'%')
    //                          ->get();

    //     return response()->json([
    //         'searchsanpham' => $searchSP,
    //     ]);
    // }
    public function SearchProduct() {
        $data = SanPham::search()->get(); //không take 6 ra được vì n view chỉ 6 cái

        return view('customer.pages.search', compact('data'));
    }



}
