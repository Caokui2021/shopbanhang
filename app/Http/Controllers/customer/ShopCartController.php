<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiTietNhapKho;
use App\Models\ChiTietDonHang;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\cart\UpdateQtyRequest;
use PhpParser\Node\Stmt\Foreach_;

class ShopCartController extends Controller
{
    public function getDetail($id)
    {
        $chiTiet = ChiTietDonHang::where('id_don_hang', $id)
                                 ->get();

        return response()->json([
            'chiTiet' => $chiTiet,
        ]);

    }

    public function index() {
        return view('customer.pages.shop-cart');
    }

    public function getData() {
        $user = Auth::guard('customer')->user();
        $data = ChiTietDonHang::join('san_phams', 'chi_tiet_don_hangs.id_san_pham', 'san_phams.id')
                              ->join('chi_tiet_nhap_khos', 'san_phams.id', 'chi_tiet_nhap_khos.id_san_pham')
                              ->select(
                                'chi_tiet_don_hangs.*',
                                'chi_tiet_nhap_khos.ten_san_pham',
                                'san_phams.hinh_anh',
                                'chi_tiet_nhap_khos.don_gia_nhap',
                                'san_phams.id as id_san_pham'
                              )
                              ->where('id_customer', $user->id)
                              ->whereNull('id_don_hang')
                              ->get();
        return response()->json(['chiTiet' => $data]);
    }

    public function store($id_san_pham) {
        $customer = Auth::guard('customer')->user();

        $sanpham = ChiTietNhapKho::join('san_phams', 'chi_tiet_nhap_khos.id_san_pham', 'san_phams.id')
                                ->find($id_san_pham);
        if($sanpham) {
            $chitietdonhang = ChiTietDonHang::where('id_san_pham', $id_san_pham)
                                            ->where('id_customer', $customer->id)
                                            ->whereNull('id_don_hang')
                                            ->first();

            if($chitietdonhang) {
                $chitietdonhang->so_luong_mua++;
                $chitietdonhang->save();
            } else {
                ChiTietDonHang::create([
                    'id_san_pham'   => $id_san_pham,
                    'id_customer'   => $customer->id,
                ]);
            }

            return response()->json([
                'status'    => true,
            ]);
        } else {
            return response()->json([
                'status'    => false,
            ]);
        }
    }

    public function updateQty(UpdateQtyRequest $request) {
        $customer = Auth::guard('customer')->user();

        $chiTiet = ChiTietDonHang::where('id', $request->id)
                                 ->where('id_customer', $customer->id)
                                 ->whereNull('id_don_hang')
                                 ->first();

        $sanPham = ChiTietNhapKho::join('san_phams', 'chi_tiet_nhap_khos.id_san_pham', 'san_phams.id')
                                 ->find($chiTiet->id_san_pham);
        if($sanPham) {
            $tonKho = $sanPham->so_luong_nhap;
            if($request->so_luong_mua > $tonKho) {
                $chiTiet->so_luong_mua = $tonKho;
                $chiTiet->save();

                return response()->json([
                    'status'    => false,
                    'message'   => 'Số lượng mua chỉ được ' . $tonKho,
                ]);
            } else {
                $chiTiet->so_luong_mua  = $request->so_luong_mua;
                $chiTiet->save();

                return response()->json([
                    'status'    => true,
                ]);
            }
        }
    }

    public function remove($id) {
        $customer = Auth::guard('customer')->user();

        ChiTietDonHang::where('id', $id)
                      ->where('id_customer', $customer->id)
                      ->whereNull('id_don_hang')
                      ->first()->delete();
    }

    public function getTotal(Request $request)
    {
        $id_khach_hang = Auth::guard('customer')->user()->id;
        $sanPham = ChiTietDonHang::join('san_phams', 'chi_tiet_don_hangs.id_san_pham', 'san_phams.id')
                                ->where('id_customer', $id_khach_hang)
                                ->whereIn('id_san_pham', $request->id_san_pham)
                                ->select('chi_tiet_don_hangs.*', 'san_phams.don_gia_khuyen_mai')
                                ->get();

        $total = 0;
        $amount = 0;
        foreach ($sanPham as $value) {
            $total += $value->don_gia_khuyen_mai;
            $amount += $value->so_luong_mua;
        }
        return response()->json([
            'total' => $total,
            'amount' => $amount,
        ]);
    }
}
