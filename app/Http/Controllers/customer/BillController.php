<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\bill\createBill;
use App\Models\Bill;
use App\Models\ChiTietDonHang;
use App\Models\ChiTietNhapKho;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BillController extends Controller
{


    public function getData()
    {
        $data = Bill::orderByDesc('id')->get();

        return response()->json([
            'bill'  => $data,
        ]);
    }

    public function store(createBill $request) {
        $cutommer = Auth::guard('customer')->user();

        $bill = Bill::create([
            'ship_fullname'     => $request->ship_fullname,
            'ship_address'      => $request->ship_address,
            'ship_phone'        => $request->ship_phone,
            'customer_id'       => $cutommer->id,
            'customer_fullname' => $cutommer->full_name,
            'customer_phone'    => $cutommer->phone,
            'customer_email'    => $cutommer->email,
        ]);

        $tongTien = 0;
        $gioHang = ChiTietDonHang::whereNull('id_don_hang')->where('id_customer', $cutommer->id)->get();

        foreach($gioHang as $value) {

            $sanPham = ChiTietNhapKho::join('san_phams', 'chi_tiet_nhap_khos.id_san_pham', 'san_phams.id')
                                     ->where('id_san_pham', $value->id_san_pham)
                                     ->select('chi_tiet_nhap_khos.*', 'san_phams.hinh_anh', 'san_phams.is_open', 'san_phams.don_gia_ban', 'san_phams.don_gia_khuyen_mai')
                                     ->first();

            if($sanPham && $sanPham->is_open == true && $sanPham->so_luong_nhap >= $value->so_luong_mua) {
                // $donGia = $sanPham->don_gia_khuyen_mai = 0 ? $sanPham->don_gia_ban : $sanPham->don_gia_khuyen_mai;
                $value->ten_san_pham = $sanPham->ten_san_pham;
                $value->don_gia_mua  = $sanPham->don_gia_nhap;
                $value->hinh_anh     = $sanPham->hinh_anh;
                $value->id_don_hang  = $bill->id;

                $tongTien = $tongTien + $sanPham->don_gia_nhap * $value->so_luong_mua;
                $value->save();
            }
        }

        $bill->bill_name  = "HDBH" . ($bill->id);
        $bill->bill_total = $tongTien;
        $bill->save();
    }

    public function index()
    {
        return view('customer.pages.list-order');
    }

    public function listOrder($id)
    {
        $listOrder = ChiTietDonHang:: where('id_don_hang', $id)
                                    ->join('bills', 'chi_tiet_don_hangs.id_don_hang', 'bills.id')
                                    ->select('chi_tiet_don_hangs.*', 'bills.bill_total','bills.is_payment')
                                    ->get();
        // dd($listOrder->toArray());
        if($listOrder) {
            return response()->json([
                'status' => true,
                'listOrder' => $listOrder,
            ]);
        } else {
            return response()->json([
                'status'   => false,
            ]);
        }
    }

    public function listBill()
    {
        $listBill = Bill::orderByDesc('id')->get();
        return response()->json(['listBill' => $listBill]);
    }
    public function search(Request $request) {
        $search     = $request->search;
        $bill    = Bill::where('bill_name', 'like', '%'.$search.'%')
                             ->get();

        return response()->json([
            'searchHoaDon' => $bill,
        ]);

    }
    public function admin_index()
    {
        $bill = Bill::all();

        return view('nhanvien.pages.hoadon.index', compact('bill'));
    }

    public function getChiTiet($id){
           $bill = ChiTietDonHang:: where('id_don_hang', $id)
                                    ->join('bills', 'chi_tiet_don_hangs.id_don_hang', 'bills.id')
                                    ->select('chi_tiet_don_hangs.*', 'bills.*')

                                    ->get();
        // dd($bill->toArray());
        if($bill) {
            return response()->json([
                'status' => true,
                'bill' => $bill,
            ]);
        } else {
            return response()->json([
                'status'   => false,
            ]);
        }
    }
    public function viewAnalytic($begin, $end)
    {
        $thongke = Bill::select(DB::raw('date(created_at) as date'),  DB::raw('sum(bill_total) as total'))
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

        return view('nhanvien.pages.hoadon.thongkebanhang', compact('begin', 'end', 'data', 'labels', 'data_js'));
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

        return view('nhanvien.pages.hoadon.thongkebanhang', compact('begin', 'end', 'data', 'labels', 'data_js'));
    }
}
