<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\admin\CreateAccount;
use App\Http\Requests\admin\UpdateAdmin;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AccountAdmin;

class AdminController extends Controller
{
    public function index() {
        if (Auth::guard('admin')->user()->is_master == 1) {
            return redirect('/admin/login');
        } else {
            return view('admin.pages.account.index');
        }
    }

    public function getData() {
        $admin = AccountAdmin::all();

        return response()->json([
            'account'   => $admin,
        ]);
    }

    public function destroy($id) {
        $admin = AccountAdmin::where('id', $id)->first();
        if($admin) {
            $admin->delete();

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
        $admin = AccountAdmin::find($id);

        if($admin) {
            return response()->json([
                'status'     =>   true,
                'admin'      =>   $admin,
            ]);
        } else {
            return response()->json([
                'status'  =>   true,
            ]);
        }
    }

    public function updateStatus($id)
    {
        $admin = AccountAdmin::find($id);

        if($admin) {
            $admin->is_block = $admin->is_block == 0 ? 1 : 0;
            $admin->save();

            return response()->json([
                'status'  => true,
            ]);

        } else {
            return response()->json([
                'status'  => false,
            ]);
        }
    }

    public function store(CreateAccount $request) {
        $account    = $request->all();

        $parts = explode(" ", $request->full_name);

        if(count($parts) > 1) {
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
        }
        else
        {
            $firstname = $request->full_name;
            $lastname = " ";
        }

        $account['ho_lot']     = $firstname;
        $account['ten']        = $lastname;
        $account['password']   = bcrypt($request->password);

        AccountAdmin::create($account);
    }

    public function update(UpdateAdmin $request) {
        $admin = AccountAdmin::find($request->id);

        $parts = explode(" ", $request->full_name);

        if(count($parts) > 1) {
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
        }
        else
        {
            $firstname = $request->full_name;
            $lastname = " ";
        }

        if(!$request->password) {
            $admin->ho_lot          = $firstname;
            $admin->ten             = $lastname;
            $admin->email           = $request->email;
            $admin->so_dien_thoai   = $request->so_dien_thoai;
            $admin->gioi_tinh       = $request->gioi_tinh;
            $admin->hinh_anh        = $request->hinh_anh;
            $admin->is_master       = $request->is_master;
            $admin->is_block        = $request->is_block;

            $admin->save();
        } else {
            $data               = $request->all();
            $data['ho_lot']     = $firstname;
            $data['ten']        = $lastname;
            $data['password']   = bcrypt($request->password);

            $admin->update($data);
        }

        return response()->json([
            'status' => true
        ]);
    }

    public function login() {
        return view('admin.login');
    }

    public function actionLogin(Request $request) {
        $checkEmail = Auth::guard('admin')->attempt([
            'email'         => $request->username,
            'password'      => $request->password]);
        $checkPhone = Auth::guard('admin')->attempt([
            'so_dien_thoai' => $request->username,
            'password'      => $request->password]);
        if($checkEmail || $checkPhone){
            return response()->json(['status' => true]);
        } else {
            return response()->json(['status' => false]);
        }
    }

    public function logout() {
        Auth::guard('admin')->logout();

        return redirect()->back();
    }

    public function checkMail(Request $request) {
        $admin = AccountAdmin::where('email', $request->email)->first();

        if($admin) {
            return response()->json([
                'status' => false,
            ]);
        } else {
            return response()->json([
                'status' => true,
            ]);
        }
    }

    public function myProfile() {
        return view('admin.myprofile');
    }

    public function getProfile() {
        $profile = Auth::guard('admin')->user();

        if ($profile) {
            return response()->json([
                'profile' => $profile,
            ]);
        }
    }

    public function postProfile(Request $request) {
        $profile = AccountAdmin::find($request->id);

        $parts = explode(" ", $request->full_name);

        if(count($parts) > 1) {
            $lastname = array_pop($parts);
            $firstname = implode(" ", $parts);
        }
        else
        {
            $firstname = $request->full_name;
            $lastname = " ";
        }

        if($profile) {
            $profile->ho_lot          = $firstname;
            $profile->ten             = $lastname;
            $profile->email           = $request->email;
            $profile->so_dien_thoai   = $request->so_dien_thoai;
            $profile->gioi_tinh       = $request->gioi_tinh;

            $profile->save();
        } else {
            $data               = $request->all();
            $data['ho_lot']     = $firstname;
            $data['ten']        = $lastname;

            $profile->update($data);
        }

        return response()->json([
            'status' => true
        ]);
    }

    public function EditImage(Request $request) {
        $img = AccountAdmin::find($request->id);

        if($img) {
            $img->hinh_anh = $request->hinh_anh;

            $img->save();
        } else {
            $data = $request->all();

            $img->update($data);
        }

        return response()->json([
            'status' => true
        ]);
    }
 }
