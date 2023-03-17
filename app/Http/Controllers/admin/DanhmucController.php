<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\DanhMuc\CreateDanhMuc;
use App\Http\Requests\DanhMuc\UpdateDanhMuc;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\DanhMuc;

class DanhmucController extends Controller
{
    public function index() {
        // $count = DanhMuc::count();
        // dd($count);
        if (Auth::guard('admin')->user()->is_master == 1) {
            return redirect('/admin/login');
        } else {
            return view('admin.pages.danhmuc.index');
        }
    }

    public function getData() {
        // $count = DanhMuc::paginate(3);
        $data           = DanhMuc::leftjoin('danh_muc as a', 'danh_muc.id_danh_muc_cha', 'a.id' )
                                ->select('danh_muc.*', 'a.ten_danh_muc as ten_danh_muc_cha')
                                ->orderByDesc('id')
                                ->get();
        $danh_muc_cha   = DanhMuc::where('id_danh_muc_cha', 0)->get();
        // dd($data->toArray());
        return response()->json([
            'danhmuc'      => $data,
            'danhmuccha'   => $danh_muc_cha,
        ]);
    }

    public function destroy($id){
        $danhMuc = DanhMuc::where('id', $id)->first();
        if($danhMuc) {
            $danhMuc->delete();

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
        // $danhmuc    = DanhMuc::find($id);
        $danhmuc    = DanhMuc::leftjoin('danh_muc as a', 'danh_muc.id_danh_muc_cha', 'a.id' )
                             ->select('danh_muc.*', 'a.ten_danh_muc as ten_danh_muc_cha')
                             ->find($id);

        if($danhmuc) {
            return response()->json([
                'status'        =>   true,
                'danh_muc'      =>   $danhmuc,
            ]);
        } else {
            return response()->json([
                'status'  =>   true,
            ]);
        }
    }

    public function autoComplete(Request $request)
    {
        $data = DanhMuc::select('ten_danh_muc')
                       ->where('ten_danh_muc', 'like', '%' . $request->ten_danh_muc . '%')
                       ->get();

        return response()->json($data);
    }

    public function updateStatus($id)
    {
        $danhMuc = DanhMuc::find($id);

        if($danhMuc) {
            $danhMuc->is_open = $danhMuc->is_open == 0 ? 1 : 0;
            $danhMuc->save();

            return response()->json([
                'status'  => true,
            ]);

        } else {
            return response()->json([
                'status'  => false,
            ]);
        }
    }

    public function store(CreateDanhMuc $request) {
        $danhmuc = DanhMuc::orderByDesc('id')->select('id')->first();
        if(!$danhmuc) {
            $id_danh_muc    = 1;
        } else {
            $id_danh_muc    = $danhmuc["id"] + 1;
        }
        $ma_danh_muc        = 'MDM' . ($id_danh_muc);

        DanhMuc::create([
            'ma_danh_muc'       =>  $ma_danh_muc ,
            'ten_danh_muc'      =>  $request->ten_danh_muc,
            'slug_danh_muc'     =>  $request->slug_danh_muc,
            'is_open'           =>  $request->is_open,
            'id_danh_muc_cha'   =>  $request->id_danh_muc_cha,
            'hinh_anh'          =>  $request->hinh_anh,
        ]);
        $danhmuc->save();

        return response()->json([
            'status'    => 1,
        ]);
    }

    public function update(UpdateDanhMuc $request) {
        $danhMuc = DanhMuc::find($request->id);

        $danhMuc->ten_danh_muc      = $request->ten_danh_muc;
        $danhMuc->slug_danh_muc     = $request->slug_danh_muc;
        $danhMuc->is_open           = $request->is_open;
        $danhMuc->id_danh_muc_cha   = $request->id_danh_muc_cha;
        $danhMuc->hinh_anh          = $request->hinh_anh;

        $danhMuc->save();
    }

    public function findName(Request $request)
    {
        $data           = DanhMuc::leftjoin('danh_muc as a', 'danh_muc.id_danh_muc_cha', 'a.id' )
                                ->select('danh_muc.*', 'a.ten_danh_muc as ten_danh_muc_cha')
                                ->where('ten_danh_muc', 'like', '%' . $request->ten_danh_muc . '%')->get();
        $danh_muc_cha   = DanhMuc::where('id_danh_muc_cha', 0)->get();

        // dd($data->toArray());
        return response()->json([
            'danhmuc'      => $data,
            'danhmuccha'   => $danh_muc_cha,
            'count' => count($data),
            'status' => 1,
        ]);
    }
}
