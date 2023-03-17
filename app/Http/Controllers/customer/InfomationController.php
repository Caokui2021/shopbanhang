<?php

namespace App\Http\Controllers\customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\infomation\profileRequest;
use App\Models\Bill;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InfomationController extends Controller
{

    public function myprofile() {
        
        return view('customer.pages.infomation');
    }

    public function getProfile() {
        $profile = Auth::guard('customer')->user();

        if ($profile) {
            return response()->json([
                'profile' => $profile,
            ]);
        }
    }

    public function postProfile(profileRequest $request) {

        $profile = Customer::find($request->id);

        if($profile) {
            $profile->full_name = $request->full_name;
            $profile->email     = $request->email;
            $profile->phone     = $request->phone;
            $profile->sex       = $request->sex;
            $profile->dob       = $request->dob;

            $profile->save();
        } else {
            $data               = $request->all();

            $profile->update($data);
        }

        return response()->json([
            'status' => true
        ]);
    }

    public function EditImage(Request $request) {
        $img = Customer::find($request->id);

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
