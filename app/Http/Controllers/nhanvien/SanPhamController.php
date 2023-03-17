<?php

namespace App\Http\Controllers\nhanvien;

use App\Http\Requests\SanPham\CreateSanPham;
use App\Http\Requests\SanPham\UpdateSanPham;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SanPham;

class SanPhamController extends Controller
{
    public function index() {
        return view('nhanvien.pages.sanpham.index');
    }

    public function getData()
    {
        $sanpham       = SanPham::join('danh_muc', 'san_phams.danh_muc_id', 'danh_muc.id')
                       ->select('san_phams.*', 'danh_muc.ten_danh_muc')
                       ->orderByDesc('id')
                       ->get();
                    //    dd($sanpham);
        return response()->json([
            'sanpham'   => $sanpham,
        ]);
    }

    public function updateStatus($id)
    {
        $sanpham = SanPham::find($id);

        if($sanpham) {
            $sanpham->is_open = $sanpham->is_open == 0 ? 1 : 0;
            $sanpham->save();

            return response()->json([
                'status'  => true,
            ]);

        } else {
            return response()->json([
                'status'  => false,
            ]);
        }
    }

    public function destroy($id){
        $sanpham = SanPham::where('id', $id)->first();
        if($sanpham) {
            $sanpham->delete();

            return response()->json([
                'status'    => true,
            ]);
        } else {
            return response()->json([
                'status'    => false,
            ]);
        }
    }

    public function edit($id) {
        $sanpham    = SanPham::find($id);

        if($sanpham) {
            return response()->json([
                'status'       =>   true,
                'san_pham'      =>   $sanpham,
            ]);
        } else {
            return response()->json([
                'status'  =>   true,
            ]);
        }
    }

    public function store(CreateSanPham $request)
    {
        $sanpham = SanPham::orderByDesc('id')->select('id')->first();

        if(!$sanpham) {
            $id_san_pham    = 1;
        } else {
            $id_san_pham    = $sanpham["id"] + 1;
        }
        $ma_san_pham        = 'MSP' . ($id_san_pham);

        SanPham::create([
            'ma_san_pham'       => $ma_san_pham,
            'ten_san_pham'      => $request->ten_san_pham,
            'slug_san_pham'     => $request->slug_san_pham,
            'is_open'           => $request->is_open,
            'don_gia_ban'       => $request->don_gia_ban,
            'don_gia_khuyen_mai'=> $request->don_gia_khuyen_mai,
            'danh_muc_id'       => $request->danh_muc_id,
            'hinh_anh'          => $request->hinh_anh,
            'mo_ta_ngan'        => $request->mo_ta_ngan,
            'mo_ta_chi_tiet'    => $request->mo_ta_chi_tiet,
        ]);

        return response()->json([
            'sanpham'   => 1,
        ]);
    }

    public function update(UpdateSanPham $request) {
        $sanpham = SanPham::find($request->id);

        $sanpham->ten_san_pham          = $request->ten_san_pham;
        $sanpham->slug_san_pham         = $request->slug_san_pham;
        $sanpham->is_open               = $request->is_open;
        $sanpham->don_gia_ban           = $request->don_gia_ban;
        $sanpham->don_gia_khuyen_mai    = $request->don_gia_khuyen_mai;
        $sanpham->danh_muc_id           = $request->danh_muc_id;
        $sanpham->hinh_anh              = $request->hinh_anh;
        $sanpham->mo_ta_ngan            = $request->mo_ta_ngan;
        $sanpham->mo_ta_chi_tiet        = $request->mo_ta_chi_tiet;

        $sanpham->save();
    }
}
