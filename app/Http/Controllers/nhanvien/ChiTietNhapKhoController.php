<?php

namespace App\Http\Controllers\nhanvien;

use App\Http\Requests\ChiTietNhapKho\CreateChiTietNhapKho;
use App\Http\Requests\ChiTietNhapKho\UpdateQty;
use App\Http\Requests\ChiTietNhapKho\UpdatePri;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiTietNhapKho;
use App\Models\HoaDonNhapKho;
use App\Models\SanPham;

class ChiTietNhapKhoController extends Controller
{
    public function index() {
        return view('nhanvien.pages.nhapkho.index');
    }

    public function getData() {
        $nhapkho = ChiTietNhapKho::join('san_phams', 'chi_tiet_nhap_khos.id_san_pham', 'san_phams.id')
                                 ->whereNull('id_hoa_don_nhap_kho')
                                 ->select('chi_tiet_nhap_khos.*', 'san_phams.ma_san_pham')
                                 ->orderByDesc('chi_tiet_nhap_khos.id')
                                 ->get();

        return response()->json([
            'nhapkho' => $nhapkho,
        ]);
    }

    public function destroy($id) {
        $nhapkho = ChiTietNhapKho::where('id', $id)->first();
        if($nhapkho) {
            $nhapkho->delete();

            return response()->json([
                'nhapkho' => true,
            ]);
        } else {
            return response()->json([
                'nhapkho' => false,
            ]);
        }
    }

    public function store(CreateChiTietNhapKho $request) {
        $chiTietNhapKho = ChiTietNhapKho::where('id_san_pham', $request->id_san_pham)
                                        ->whereNull('id_hoa_don_nhap_kho')
                                        ->first();
        if($chiTietNhapKho) {
            $chiTietNhapKho->so_luong_nhap++;
            $chiTietNhapKho->save();
        } else {
            $sanPham = SanPham::find($request->id_san_pham);
            ChiTietNhapKho::create([
                'id_san_pham'    =>  $sanPham->id,
                'ten_san_pham'   =>  $sanPham->ten_san_pham,
                'so_luong_nhap'  =>  1,
                'don_gia_nhap'   =>  $sanPham->don_gia_khuyen_mai,
            ]);
        }
    }

    public function updateQty(UpdateQty $request) {
        $updateQty = ChiTietNhapKho::where('id', $request->id)
                                ->whereNull('id_hoa_don_nhap_kho')
                                ->first();

        if($updateQty) {
            $updateQty->so_luong_nhap = $request->so_luong_nhap;

            $updateQty->save();
        } else {
            return response()->json([
                'updateQty'    => false,
            ]);
        }
    }

    public function updatePri(UpdatePri $request) {
        $updatePri = ChiTietNhapKho::where('id', $request->id)
                                ->whereNull('id_hoa_don_nhap_kho')
                                ->first();

        if($updatePri) {
            $updatePri->don_gia_nhap  = $request->don_gia_nhap;

            $updatePri->save();
        } else {
            return response()->json([
                'status'    => false,
            ]);
        }
    }

    public function search(Request $request) {
        $search     = $request->search;

        $sanpham    = SanPham::where('ma_san_pham', 'like', '%'.$search.'%')
                             ->orWhere('ten_san_pham', 'like', '%'.$search.'%')
                             ->get();

        return response()->json([
            'searchsanpham' => $sanpham,
        ]);
    }

    public function history() {
        $hoadon = HoaDonNhapKho::orderByDesc('id')->get();

        return response()->json([
            'hoadon' => $hoadon,
        ]);
    }
}
