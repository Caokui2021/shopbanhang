<?php

namespace App\Http\Controllers\nhanvien;

use App\Models\ChiTietNhapKho;
use App\Models\HoaDonNhapKho;
use App\Models\SanPham;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;

class HoaDonNhapKhoController extends Controller
{
    public function storeHoaDon() {
        $nhapkho = ChiTietNhapKho::whereNull('id_hoa_don_nhap_kho')->get();

        if (count($nhapkho) > 0) {
            $hoadon = HoaDonNhapKho::create([
                'hash' => Str::uuid(),
            ]);

            $hoadon->ma_hoa_don = 'HDNK' . ($hoadon->id);

            $tong_tien      = 0;
            $tong_san_pham  = 0;

            foreach ($nhapkho as $key => $value) {
                $sanpham = SanPham::find($value->id_san_pham);

                if($sanpham) {
                    $tong_san_pham  += $value->so_luong_nhap;
                    $tong_tien      += $value->so_luong_nhap * $value->don_gia_nhap;

                    $value->id_hoa_don_nhap_kho = $hoadon->id;
                    $value->save();
                } else {
                    $value->delete();
                }
            }

            $hoadon->tong_tien      = $tong_tien;
            $hoadon->tong_san_pham  = $tong_san_pham;
            $hoadon->save();

            if($tong_san_pham > 0) {
                return response()->json([
                    'status' => true,
                ]);
            } else {
                $hoadon->delete();

                return response()->json([
                    'status' => false,
                ]);
            }
        }
    }

    public function chiTiet($id_hoa_don) {
        $chitiet = ChiTietNhapKho::where('id_hoa_don_nhap_kho', $id_hoa_don)
                                 ->join('san_phams', 'chi_tiet_nhap_khos.id_san_pham', 'san_phams.id')
                                 ->select('chi_tiet_nhap_khos.*', 'san_phams.ma_san_pham')
                                 ->orderByDesc('id')
                                 ->get();
        if(count($chitiet) > 0) {
            return response()->json([
                'status'   => true,
                'nhapkho'  => $chitiet,
            ]);
        } else {
            return response()->json([
                'status'   => false,
            ]);
        }
    }

    public function viewAnalytic($begin, $end)
    {
        $thongke = HoaDonNhapKho::select(DB::raw('date(created_at) as date'),  DB::raw('sum(tong_tien) as total'))
                             ->whereDate('created_at', '>=', $begin)
                             ->whereDate('created_at', '<=', $end)
                             ->groupBy('date')
                             ->get();

        return $thongke;
    }

    public function analytic() {
        $end     = Carbon::now();
        $begin   = Carbon::now()->subDays(10);

        $data    = $this->viewAnalytic($begin, $end);

        $labels  = [];
        $data_js = [];
        foreach ($data as $key => $value) {
            array_push($labels,  $value->date);
            array_push($data_js, $value->total);
        }

        return view('nhanvien.pages.nhapkho.thongke', compact('begin', 'end', 'data', 'labels', 'data_js'));
    }

    public function analyticPost(Request $request) {
        $end    = $request->end_date;
        $begin  = $request->from_date;

        $data    = $this->viewAnalytic($begin, $end);

        $labels  = [];
        $data_js = [];

        foreach ($data as $key => $value) {
            array_push($labels,  $value->date);
            array_push($data_js, $value->total);
        }

        return view('nhanvien.pages.nhapkho.thongke', compact('begin', 'end', 'data', 'labels', 'data_js'));
    }

    public function thanhToan(Request $request) {
        $thanhtoan = HoaDonNhapKho::where('id', $request->id)->first();

        $thanhtoan->hinh_thuc_thanh_toan = $request->hinh_thuc_thanh_toan;
        $thanhtoan->minh_chung           = $request->minh_chung;
        $thanhtoan->save();

        if ($thanhtoan->hinh_thuc_thanh_toan != null) {
            $thanhtoan->tinh_trang = 1;
            $thanhtoan->save();

            return response()->json([
                'status' => true,
            ]);
        } else {
            return response()->json([
                'status' => false,
            ]);
        }
    }
}
